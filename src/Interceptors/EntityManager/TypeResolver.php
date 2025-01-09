<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interceptors\EntityManager;

use Magento\Framework\EntityManager\MetadataPool;
use Magento\Framework\EntityManager\TypeResolver as BaseTypeResolver;
use Magento\SalesRule\Api\Data\RuleInterface;
use Magento\SalesRule\Model\Rule;
use Magento\SalesRule\Model\Rule\Interceptor;
use Magento\SalesRule\Model\Rule\Proxy;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Framework\Support\Reflection;

/**
 * Resolves types for models by mapping them to the corresponding data interface.
 *
 * This class is responsible for resolving the correct data interface type for a given model type.
 * It checks if a given class implements a specific data interface pattern and resolves it accordingly.
 *
 * It also maintains a cache of previously resolved types in the form of `$typeMapping` to avoid redundant calculations.
 */
class TypeResolver extends BaseTypeResolver
{
    /**
     * @var MetadataPool The metadata pool used to fetch metadata configurations for data interfaces.
     */
    private MetadataPool $metadataPool;

    /**
     * @var array Maps concrete model classes to their corresponding data interface classes.
     *            This is used to avoid redundant resolution of types.
     */
    private $typeMapping = [
        Rule::class => RuleInterface::class,
        Proxy::class => RuleInterface::class,
        Interceptor::class => RuleInterface::class,
    ];

    /**
     * @var array List of patterns used to match interfaces that belong to data interfaces.
     *            These patterns are used to check if a class implements an interface in \Api\Data\ or \Interfaces\Data\ namespaces.
     */
    private $patterns = [
        '\\Api\\Data\\', // Matches any interface in the \Api\Data\ namespace
        '\\Interfaces\\Data\\', // Matches any interface in the \Interfaces\Data\ namespace
    ];

    /**
     * TypeResolver constructor.
     *
     * Initializes the resolver with a metadata pool instance.
     *
     * @param  MetadataPool  $metadataPool  The metadata pool that holds configurations for data interfaces.
     */
    public function __construct(MetadataPool $metadataPool)
    {
        $this->metadataPool = $metadataPool;
    }

    /**
     * Resolves the type of the given model.
     *
     * This method checks if the model class already has a resolved data interface.
     * If not, it looks for interfaces implemented by the model and checks if they match the defined patterns.
     * If a match is found, the corresponding data interface is returned.
     * The result is cached in the `$typeMapping` property for future calls.
     *
     * @param  object  $type  The model instance whose type needs to be resolved.
     *
     * @throws Exception If no matching data interface can be resolved.
     *
     * @return string The resolved data interface for the given model.
     */
    public function resolve($type)
    {
        // Get the class name of the model
        $className = get_class($type);

        // If the type has already been resolved, return the cached value
        if (isset($this->typeMapping[$className])) {
            return $this->typeMapping[$className];
        }

        // Reflect on the model class to get its interfaces
        $interfaceNames = Reflection::getInterfaceNames($type);

        // Initialize an array to hold data interfaces
        $dataInterfaces = [];

        // Iterate through the interfaces to find those that match our patterns
        foreach ($interfaceNames as $interfaceName) {
            // If the interface matches one of the defined patterns, add it to the dataInterfaces array
            if ($interfaceName && $this->matchesPatterns($interfaceName)) {
                $dataInterfaces[] = $interfaceName;
            }
        }

        // If no data interfaces were found, return the class name itself as the type
        if (count($dataInterfaces) === 0) {
            return $className;
        }

        // Resolve the data interface from the pool of data interfaces
        foreach ($dataInterfaces as $dataInterface) {
            if ($this->metadataPool->hasConfiguration($dataInterface)) {
                $this->typeMapping[$className] = $dataInterface;

                return $dataInterface;
            }
        }

        // If no specific data interface is found in the metadata pool, return the first one from the dataInterfaces array
        $this->typeMapping[$className] = reset($dataInterfaces);

        return $this->typeMapping[$className];
    }

    /**
     * Checks if an interface name matches any of the defined patterns.
     *
     * This method is used to check whether an interface belongs to one of the namespaces defined in `$patterns`.
     * It is called during the resolution process to filter out only the interfaces that are relevant to data objects.
     *
     * @param  string  $interfaceName  The name of the interface to check.
     *
     * @return bool True if the interface name matches any of the patterns, false otherwise.
     */
    private function matchesPatterns($interfaceName)
    {
        // Iterate over the defined patterns and check if the interface name contains any of them
        foreach ($this->patterns as $pattern) {
            if (str_contains($interfaceName, $pattern)) {
                return true;
            }
        }

        // Return false if no pattern matches the interface name
        return false;
    }
}
