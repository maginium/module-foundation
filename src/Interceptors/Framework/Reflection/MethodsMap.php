<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interceptors\Framework\Reflection;

use InvalidArgumentException;
use Laminas\Code\Reflection\ClassReflection;
use Magento\Framework\Api\AttributeTypeResolverInterface;
use Magento\Framework\Cache\FrontendInterface;
use Magento\Framework\Reflection\FieldNamer;
use Magento\Framework\Reflection\MethodsMap as BaseMethodsMap;
use Magento\Framework\Reflection\TypeProcessor;
use Magento\Framework\Serialize\SerializerInterface;
use ReflectionException;
use ReflectionMethod;

/**
 * Gathers method metadata information.
 */
class MethodsMap extends BaseMethodsMap
{
    /**
     * @var array
     */
    private $serviceInterfaceMethodsMap = [];

    /**
     * @var FrontendInterface
     */
    private $cache;

    /**
     * @var TypeProcessor
     */
    private $typeProcessor;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @param FieldNamer $fieldNamer
     * @param FrontendInterface $cache
     * @param TypeProcessor $typeProcessor
     * @param SerializerInterface $serializer
     * @param AttributeTypeResolverInterface $typeResolver
     */
    public function __construct(
        FieldNamer $fieldNamer,
        FrontendInterface $cache,
        TypeProcessor $typeProcessor,
        SerializerInterface $serializer,
        AttributeTypeResolverInterface $typeResolver,
    ) {
        parent::__construct($cache, $typeProcessor, $typeResolver, $fieldNamer);

        $this->cache = $cache;
        $this->serializer = $serializer;
        $this->typeProcessor = $typeProcessor;
    }

    /**
     * Return service interface or Data interface methods loaded from cache.
     *
     * @param string $interfaceName
     *
     * @throws InvalidArgumentException if methods don't have annotation
     * @throws ReflectionException for missing DocBock or invalid reflection class
     *
     * @return array
     * <pre>
     * Service methods' reflection data stored in cache as 'methodName' => 'returnType'
     * ex.
     * [
     *  'create' => '\Magento\Customer\Api\Data\Customer',
     *  'validatePassword' => 'boolean'
     * ]
     * </pre>
     */
    public function getMethodsMap($interfaceName): array
    {
        // Generate a unique cache key for the interface methods map.
        // Using MD5 hash ensures uniqueness and avoids long strings as cache keys.
        // @phpcs:ignore Magento2.Security.InsecureFunction - MD5 usage is safe here as it's for caching purposes.
        $key = self::SERVICE_INTERFACE_METHODS_CACHE_PREFIX . '-' . md5($interfaceName);

        // Check if the methods map is already available in memory.
        if (! isset($this->serviceInterfaceMethodsMap[$key])) {
            // Attempt to load the methods map from cache.
            $methodMap = $this->cache->load($key);

            if ($methodMap) {
                // If cache is available, unserialize it to retrieve the methods map.
                $this->serviceInterfaceMethodsMap[$key] = $this->serializer->unserialize($methodMap);
            } else {
                // If not cached, generate the methods map via reflection.
                $methodMap = $this->getMethodMapViaReflection($interfaceName);

                // Store the newly generated methods map in memory.
                $this->serviceInterfaceMethodsMap[$key] = $methodMap;

                // Serialize and save the methods map to cache for future lookups.
                $this->cache->save(
                    $this->serializer->serialize($this->serviceInterfaceMethodsMap[$key]),
                    $key,
                );
            }
        }

        // Return the cached or newly generated methods map.
        return $this->serviceInterfaceMethodsMap[$key];
    }

    /**
     * Use reflection to load method information from a given interface.
     *
     * This function retrieves all public methods of the specified interface,
     * determines their suitability, and maps their names to their return types
     * using a type processor. The function ensures methods from parent classes
     * of `AbstractExtensibleModel` are excluded while including relevant methods
     * from derived classes.
     *
     * @param string $interfaceName The fully qualified name of the interface to reflect.
     *
     * @throws ReflectionException If the class for the interface cannot be reflected.
     * @throws InvalidArgumentException If methods lack the necessary annotations.
     *
     * @return array<string, string> A map of method names to their return types.
     */
    private function getMethodMapViaReflection(string $interfaceName): array
    {
        // Initialize an empty method map.
        $methodMap = [];

        // Skip processing for unsupported interface names.
        // if ($interfaceName === 'mix' || $interfaceName === 'mixed') {
        //     return $methodMap;
        // }

        // Reflect the class/interface to extract its methods.
        $class = new ClassReflection($interfaceName);
        $baseClassMethods = false;

        // Iterate over all public methods of the class.
        foreach ($class->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
            /*
             * Determine whether to include methods based on inheritance:
             * - Include methods from classes inheriting from AbstractExtensibleObject.
             * - Exclude methods from parent classes of AbstractExtensibleModel.
             */
            if ($method->class === self::BASE_MODEL_CLASS) {
                $baseClassMethods = true; // Base class methods detected.
            } elseif ($baseClassMethods) {
                // Stop processing further methods from the parent hierarchy.
                break;
            }

            // Check if the method is suitable for processing.
            if ($this->isSuitableMethod($method)) {
                // Add the method name and its return type to the map.
                $methodMap[$method->getName()] = $this->typeProcessor->getGetterReturnType($method);
            }
        }

        // Return the populated method map.
        return $methodMap;
    }

    /**
     * Determines if a method is suitable for processing.
     *
     * A method is deemed suitable if it is:
     * - Not a constructor or destructor.
     * - Not declared as `final` or `static`.
     * - Does not have a name starting with `__` (to exclude magic methods).
     *
     * @param ReflectionMethod $method The method to evaluate.
     *
     * @return bool True if the method is suitable, false otherwise.
     */
    private function isSuitableMethod(ReflectionMethod $method): bool
    {
        // Check for method types that make it unsuitable.
        $isSuitableMethodType = ! ($method->isConstructor() || $method->isFinal()
            || $method->isStatic() || $method->isDestructor());

        // Exclude magic methods by checking if the name starts with '__'.
        $isExcludedMagicMethod = str_starts_with($method->getName(), '__');

        // Return true if the method is suitable and not a magic method.
        return $isSuitableMethodType && ! $isExcludedMagicMethod;
    }
}
