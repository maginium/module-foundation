<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\DataSource;

use Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperResolver as BaseDataSourceResolver;
use Maginium\Foundation\Exceptions\InvalidArgumentException;
use Maginium\Foundation\Interfaces\DataSourceInterface;
use Maginium\Framework\Database\Interfaces\Data\ModelInterface;
use Maginium\Framework\Support\DataObject;
use Maginium\Framework\Support\Facades\Concurrency;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Reflection;
use Maginium\Framework\Support\Str;
use Maginium\Framework\Support\Validator;

/**
 * Resolver class responsible for mapping document data using data sources.
 * This class identifies the appropriate data sources for a given entity type,
 * validates them, and processes them to map document data.
 */
abstract class DataSourceResolver extends BaseDataSourceResolver
{
    /**
     * Registry for managing and retrieving data sources.
     *
     * @var DataSourceRegistry
     */
    protected DataSourceRegistry $registry;

    /**
     * Constructor method.
     * Initializes the resolver with the provided data sources registry.
     *
     * @param DataSourceRegistry $registry The registry used to manage data sources.
     */
    public function __construct($registry)
    {
        // Store the provided data sources registry for later use.
        $this->registry = $registry;
    }

    /**
     * Resolves the entity type based on the context or default configuration.
     *
     * @param ModelInterface $entity The entity class.
     *
     * @return string The resolved entity type, which determines the applicable data sources.
     */
    protected function resolveModelType($entity): string
    {
        $entityName = Str::lower(Reflection::getShortName($entity));

        // Extract the class name using Reflection, then convert it to lowercase.
        return Str::plural($entityName);
    }

    /**
     * Processes the data sources concurrently and collects results.
     *
     * @param DataSource[] $dataSources The data sources to process.
     * @param DataObject $documentData The document data to be processed.
     * @param int $storeId The store ID.
     *
     * @return array The results from all data sources.
     */
    protected function processDataSources(array $dataSources, DataObject $documentData, int $storeId): array
    {
        // Step 1: Create a mapping of unique keys for each data source.
        // Each key is based on the unique hash of the data source object.
        $dataKeys = $this->mapDataKeys($dataSources);

        // Step 2: Create a list of tasks to be executed concurrently.
        // Each task processes a single data source.
        $tasks = $this->prepareTasks($dataSources, $documentData, $storeId);

        // Step 3: Run all tasks concurrently and collect their results.
        $results = Concurrency::run($tasks);

        // Step 4: Integrate the results from all tasks into the document data.
        $this->mergeResultsIntoDocument($results, $dataKeys, $documentData);

        // Step 5: Convert the updated document data into an array and return it.
        return $documentData->toArray();
    }

    /**
     * Prepares tasks for concurrent execution.
     *
     * @param DataSource[] $dataSources The data sources to process.
     * @param DataObject $documentData The document data to be processed.
     * @param int $storeId The store ID.
     *
     * @return callable[] An array of callables representing tasks.
     */
    protected function prepareTasks(array $dataSources, DataObject $documentData, int $storeId): array
    {
        // Use a collection to map each data source to a callable task.
        return collect($dataSources)->map(
            fn(DataSource $source): callable => function() use ($source, $documentData, $storeId) {
                // Validate that the data source implements the required interface.
                $this->validateDataSource($source);

                // Call the addData method on the data source with the document data and store ID.
                return $source->addData($documentData, $storeId);
            },
        )->toArray();
    }

    /**
     * Validates that the data source implements the required interface.
     *
     * @param mixed $source The data source to validate.
     *
     * @throws InvalidArgumentException If the data source does not implement the required interface.
     *
     * @return void
     */
    protected function validateDataSource($source): void
    {
        // Check if the data source implements the required interface.
        if (! Reflection::implements($source, DataSourceInterface::class)) {
            // Throw an exception if the data source does not implement the interface.
            throw InvalidArgumentException::make(
                Str::format('The data source "%s" must implement the interface "%s".', get_class($source), DataSourceInterface::class),
            );
        }
    }

    /**
     * Maps each data source to a unique key.
     *
     * @param DataSource[] $dataSources The data sources to process.
     *
     * @return array A mapping of unique object hashes to data keys.
     */
    private function mapDataKeys(array $dataSources): array
    {
        // Use a collection to iterate over data sources and map each to a unique key.
        return collect($dataSources)->mapWithKeys(
            // Generate a unique key for each data source using its object hash.
            fn(DataSource $source) => [spl_object_hash($source) => $this->getDataKey($source)],
        )->toArray();
    }

    /**
     * Merges the results into the document data.
     *
     * @param array $results The results from the data sources.
     * @param array $dataKeys The mapping of object hashes to data keys.
     * @param DataObject $documentData The document data object.
     *
     * @return void
     */
    private function mergeResultsIntoDocument(array $results, array $dataKeys, DataObject $documentData): void
    {
        // Loop through each result from the tasks.
        foreach ($results as $index => $result) {
            // Get the data key corresponding to the current result's index.
            // Use 'default' if no key is found.
            $dataKey = $dataKeys[array_keys($dataKeys)[$index]] ?? 'default';

            // Merge the result into the document data using the data key.
            $documentData->setData($dataKey, $this->mergeResults([$result]));
        }
    }

    /**
     * Merges results from all data sources into a single array.
     *
     * @param array $results The results to merge.
     *
     * @return array The merged result.
     */
    private function mergeResults(array $results): array
    {
        // Use a deep merge function to combine all results into a single array.
        return collect($results)->reduce(
            fn(array $carry, array $item) => Php::deepMerge($carry, $item),
            [], // Start with an empty array as the initial value.
        );
    }

    /**
     * Retrieves the data key from the data source.
     *
     * This method checks if the data source object has a `key` property.
     * If the property exists, it returns it. If not, it falls back to the
     * class name (in lowercase) of the data source as the key.
     *
     * @param DataSource $dataSource The data source object.
     *
     * @return string The key from the data source or a derived key based on the class name.
     */
    private function getDataKey(DataSource $dataSource): string
    {
        // Check if the data source has a 'key' property. If not, use the class name as the key.
        if (Reflection::propertyExists($dataSource, 'key') && ! Validator::isEmpty($dataSource->key)) {
            return $dataSource->key;
        }

        // If the 'key' doesn't exist or is empty, fall back to the class name.
        return Str::lower($this->getSourceName($dataSource));
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
