<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\DataSource;

use Illuminate\Support\Collection;
use Magento\Framework\Exception\ConfigurationMismatchException;
use Maginium\Foundation\Exceptions\InvalidArgumentException;
use Maginium\Foundation\Interfaces\DataSourceInterface;
use Maginium\Framework\Support\Arr;
use Maginium\Framework\Support\Facades\Container;
use Maginium\Framework\Support\Reflection;
use Maginium\Framework\Support\Str;
use Maginium\Framework\Support\Validator;

/**
 * DataSourceRegistry.
 *
 * This class manages multiple service datasources, allowing dynamic access to datasources for specific entities.
 * It is designed to be extended for different types of data sources.
 */
abstract class DatasourceRegistry extends Collection
{
    /**
     * Key for the key of data sources.
     *
     * @var string
     */
    public const KEY = 'key';

    /**
     * Key for the sort order of data sources.
     *
     * @var string
     */
    public const SORT_ORDER = 'sortOrder';

    /**
     * Key for the class name of the data source.
     *
     * @var string
     */
    public const DATA_SOURCE_CLASS = 'class';

    /**
     * Constructor to initialize the service datasources.
     *
     * @param array $datasources Associative array of entities and their data sources.
     */
    public function __construct(array $items = [])
    {
        // Process the datasources using the separate method
        $this->processDataSources($items);
    }

    /**
     * Add a data source to a specific entity.
     *
     * @param string $entity The name of the entity (e.g., 'customer').
     * @param string $key The identifier for the data source.
     * @param mixed $datasource The data source instance or configuration.
     *
     * @return void
     */
    public function addDatasource(string $entity, string $key, $datasource): void
    {
        // Ensure the entity exists in the collection, otherwise initialize it as an empty array.
        $this->put($entity, $this->get($entity, collect()));

        // Add the datasource to the collection for the given entity.
        $this->get($entity)->put($key, $datasource);
    }

    /**
     * Get all datasources.
     *
     * @return DataSourceInterface[] An array of data source instances for the given model type.
     */
    public function getDatasources(): array
    {
        // Return the complete array of data source instances.
        return $this->all();
    }

    /**
     * Get datasources for a specific entity.
     *
     * @param string $entity The name of the entity (e.g., 'customer').
     *
     * @return DataSourceInterface[] An array of data source instances for the given model type.
     */
    public function getDatasourcesForEntity(string $entity): array
    {
        // Return an empty array if the model type is not found.
        if (! $this->has($entity)) {
            return [];
        }

        // Retrieve all data sources associated with the given model type.
        $entityDataSources = $this->get($entity);

        // Sort all data sources by their sort order.
        $sortedDataSources = $this->sortDataSources($entityDataSources);

        // Iterate over each sorted data source and instantiate them.
        foreach ($sortedDataSources as $entityKey => $dataSource) {
            // Extract the data source class name from the definition.
            $dataSourceInstance = $dataSource[static::DATA_SOURCE_CLASS] ?? $dataSource;

            // Validate the data source instance.
            $this->validateDataSource($dataSourceInstance);

            // Add the created instance to the list of data sources.
            $dataSources[] = $dataSourceInstance;
        }

        // Return the complete array of data source instances.
        return $dataSources;
    }

    /**
     * Validates a list of data sources to ensure they meet required standards.
     *
     * @param DataSource $dataSource The data sources to validate.
     *
     * @throws ConfigurationMismatchException If a data source doesn't implement the required interface.
     *
     * @return void
     */
    private function validateDataSource(DataSource $dataSource): void
    {
        // Check if the data source implements the required interface.
        if (! $dataSource instanceof DataSourceInterface) {
            // Throw an exception if the data source does not meet the interface requirement.
            throw new ConfigurationMismatchException(
                __('Data source "%1" must implement interface %2', get_class($dataSource), DataSourceInterface::class),
            );
        }
    }

    /**
     * Processes the data sources and resolves the keys, merging arrays if necessary.
     *
     * @param array $datasources Associative array of entities and their data sources.
     *
     * @return void
     */
    private function processDataSources(array $datasources): void
    {
        // Loop through each data source provided in the constructor
        foreach ($datasources as $key => $value) {
            // Resolve the key if it's a string and either a constant or regular string
            $resolvedKey = $this->resolveConstantKey($key);

            // Check if the key already exists in the collection
            if (isset($this->items[$resolvedKey])) {
                // If the value is an array and the existing value is also an array, merge them
                if (Validator::isArray($value)) {
                    $this->items[$resolvedKey] = Arr::merge($this->items[$resolvedKey], $value);
                } elseif (Validator::isString($value)) {
                    // Get the class name
                    $keyName = Reflection::getShortName($value);

                    // Convert it to studly case
                    $keyName = Str::snake($keyName);

                    // If the value is a string and the existing value is an array, add it to the array
                    $this->items[$resolvedKey][$keyName] = Container::resolve($value);
                } else {
                    // If it's neither an array nor string, overwrite it
                    $this->items[$resolvedKey] = $value;
                }
            } else {
                // If the key doesn't exist, just assign the value
                $this->items[$resolvedKey] = $value;
            }
        }
    }

    /**
     * Resolves the key if it's a constant or returns the original key if not.
     *
     * @param mixed $key The key to resolve, which could be a string or other type.
     *
     * @throws InvalidArgumentException if the key is a string but not a defined constant.
     *
     * @return string The resolved key or original key if no constant is found.
     */
    private function resolveConstantKey($key): string
    {
        // Check if the key contains "::" to determine if it might be a class constant
        if (Validator::isString($key) && Str::contains($key, '::')) {
            // If it contains "::", it's a class constant, so check if it's defined
            if (defined($key)) {
                return constant($key); // Resolve the constant to its actual value
            }

            // If the constant is not defined, throw an exception
            throw InvalidArgumentException::make("Constant '{$key}' is not defined.");
        }

        return $key;
    }

    /**
     * Sort the provided data sources by their sort order.
     *
     * @param array $dataSources The array of data source configurations.
     *
     * @return array Sorted data source configurations.
     */
    private function sortDataSources(array $dataSources): array
    {
        // Ensure each data source has a consistent structure with class name and sort order.
        foreach ($dataSources as $key => &$dataSource) {
            $dataSource = $this->createItem($dataSource);
        }

        // Now, we need to sort both the outer array and any inner arrays by sortOrder
        uasort($dataSources, function($a, $b) {
            // Check if both $a and $b are not arrays
            if (! Validator::isArray($a) && ! Validator::isArray($b)) {
                return $a[static::SORT_ORDER] <=> $b[static::SORT_ORDER];
            }

            // Return 0 if either $a or $b is an array (no sorting)
            return 0;
        });

        // Recursively sort any nested data sources.
        $this->sortNestedDataMappers($dataSources);

        // Return the sorted data source configurations.
        return $dataSources;
    }

    /**
     * Create a structured data source item.
     *
     * @param DataSource $class The class of the data source.
     *
     * @return array A structured array containing the class name, sort order, and data source key.
     */
    private function createItem(DataSource $class): array
    {
        // Return the structured data source item.
        return [
            static::DATA_SOURCE_CLASS => $class,
            static::KEY => $this->getDataKey($class),
            static::SORT_ORDER => $this->getSortOrder($class),
        ];
    }

    /**
     * Retrieves the data key from the data source.
     *
     * This method checks if the data source object has a `key` property.
     * If the property exists and is not empty, it returns it. Otherwise, it falls back to the
     * class name (in lowercase) of the data source as the key.
     *
     * @param DataSource $dataSource The data source object.
     *
     * @return string The key from the data source or a derived key based on the class name.
     */
    private function getDataKey(DataSource $dataSource): string
    {
        // If the 'key' exists and is not empty, return it; otherwise, return the class name in lowercase.
        return Reflection::propertyExists($dataSource, 'key') ? $dataSource->key : Str::lower($this->getSourceName($dataSource));
    }

    /**
     * Retrieves the sort order of a data source, or a default value if not available.
     *
     * @param DataSource $dataSource The data source object.
     *
     * @return int The sort order, defaulting to 999 if not set.
     */
    private function getSortOrder(DataSource $dataSource): int
    {
        // Return the sort order if it exists, otherwise default to 999.
        return Reflection::propertyExists($dataSource, 'sortOrder') ? $dataSource->sortOrder : 999;
    }

    /**
     * Sort nested data mappers (if any) by their 'sortOrder' property.
     *
     * @param array $dataMapper - The data mapper array which might contain nested items to sort.
     */
    private function sortNestedDataMappers(array &$dataMapper): void
    {
        // Iterate through each nested data mapper and sort them by their 'sortOrder'.
        foreach ($dataMapper as &$subItem) {
            // If the sub-item is an array and has the 'sortOrder' key, perform sorting.
            if (Validator::isArray($subItem) && isset($subItem[static::SORT_ORDER])) {
                uasort($dataMapper, fn($a, $b) => $a[static::SORT_ORDER] <=> $b[static::SORT_ORDER]);
            }
        }
    }

    /**
     * Retrieves the base name of the data source class.
     *
     * This method uses PHP's `get_class_basename` function to get the class name
     * of the data source without the namespace.
     *
     * @param DataSource $dataSource The data source object.
     *
     * @return string The base name of the class (e.g., "SalesOrderData").
     */
    private function getSourceName(DataSource $dataSource): string
    {
        // Get the class name without the namespace.
        $className = Reflection::getClassBasename($dataSource::class);

        // Return the base name of the class (e.g., "SalesOrderData").
        return $className;
    }
}
