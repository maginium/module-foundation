<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts\DataSource;

use Maginium\Foundation\Interfaces\DataSourceInterface;
use Maginium\Framework\Support\DataObject;

/**
 * Abstract class DataSource.
 *
 * This abstract class is responsible for mapping the index data to be used in the search engine's metadata.
 * It provides base functionality for processing and mapping documents before indexing them in the search engine.
 * Concrete classes should implement specific logic for transforming and appending data based on their needs.
 *
 * @mixin DataSourceInterface
 * @mixin TransformableInterface
 *
 * @method mixed addData(DataObject $model, int $storeId) Adds additional data to the provided model.
 * @method mixed transform(string $attribute, mixed $value, ?int $storeId = null) Transforms the individual item for indexing.
 */
abstract class DataSource
{
    /**
     * Sort order of the data source.
     *
     * @var int
     */
    public int $sortOrder = 0;

    /**
     * Key used for response payload of the data source.
     *
     * @var string|null
     */
    public ?string $key = null;
}
