<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interceptors\Framework\Webapi;

use DOMElement;
use Magento\Framework\Exception\SerializationException;
use Magento\Framework\Webapi\ServiceInputProcessor as BaseServiceInputProcessor;
use Maginium\Framework\Dto\DataTransferObject;
use Maginium\Framework\Support\Reflection;
use Override;
use SimpleXMLElement;

/**
 * Custom Service Input Processor.
 *
 * This class deserializes API request arguments, providing enhanced support for
 * Data Transfer Objects (DTOs) by directly populating their properties.
 */
class ServiceInputProcessor extends BaseServiceInputProcessor
{
    /**
     * Deserialize data into an object.
     *
     * Supports Data Transfer Objects (DTOs) by directly mapping properties, while
     * delegating non-DTO processing to the parent method.
     *
     * @param  string  $className  Fully qualified class name of the target object.
     * @param  array  $data  Associative array of data to be deserialized.
     *
     * @throws SerializationException If the class type is invalid or if property mapping fails.
     *
     * @return object The populated object.
     */
    #[Override]
    protected function _createFromArray($className, $data): object
    {
        // Ensure the provided data is an array
        $data = is_array($data) ? $data : [];
        $className = (string)$className;

        // Prevent deserialization of invalid data types
        if ($this->isInvalidType($className)) {
            throw new SerializationException(__('Invalid data type'));
        }

        // Handle Data Transfer Objects (DTOs)
        if (Reflection::isSubclassOf($className, DataTransferObject::class)) {
            return $this->createFromDto($className, $data);
        }

        // Delegate non-DTO deserialization to the parent method
        return parent::_createFromArray($className, $data);
    }

    /**
     * Check if the class name represents an invalid type.
     *
     * @param  string  $className  Fully qualified class name.
     *
     * @return bool True if the class name is an invalid type, otherwise false.
     */
    private function isInvalidType(string $className): bool
    {
        return Reflection::isSubclassOf($className, SimpleXMLElement::class)
            || Reflection::isSubclassOf($className, DOMElement::class);
    }

    /**
     * Creates and populates a Data Transfer Object (DTO) with the given data.
     *
     * @param  class-string<DataTransferObject>  $dto  Fully qualified class name of the DTO.
     * @param  array<string, mixed>  $data  Associative array of data to populate the DTO.
     *
     * @throws SerializationException If a property does not exist in the DTO.
     *
     * @return DataTransferObject The populated DTO instance.
     */
    private function createFromDto(string $dto, array $data): DataTransferObject
    {
        // Validate and collect properties for the DTO
        $properties = [];

        foreach ($data as $propertyName => $value) {
            if (Reflection::propertyExists($dto, $propertyName)) {
                $properties[$propertyName] = $value;
            } else {
                throw new SerializationException(__(
                    'Property "%property_name" does not exist in DTO "%dto_class".',
                    ['property_name' => $propertyName, 'dto_class' => $dto],
                ));
            }
        }

        // Instantiate and populate the DTO
        return $dto::make($properties);
    }
}
