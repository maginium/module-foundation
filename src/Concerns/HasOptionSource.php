<?php

declare(strict_types=1);

namespace Maginium\Foundation\Concerns;

use Magento\Framework\Phrase;
use Maginium\Framework\Actions\Concerns\AsObject;
use Maginium\Framework\Support\Arr;

/**
 * Trait HasOptionSource.
 *
 * Provides a base structure for creating input type configuration classes.
 * Implements the Arrayable interface and enforces the implementation of the `toArray` method.
 * Child classes must define their own key-value options.
 */
trait HasOptionSource
{
    use AsObject;

    /**
     * Generate options in a "value-label" format suitable for dropdowns.
     *
     * This method processes nested arrays containing 'value' and 'label' keys
     * and transforms them into the appropriate format for Magento's form components.
     *
     * @return array An array of options, each containing 'value' and 'label' keys.
     */
    public function toOptionArray(): array
    {
        $options = [];

        // Loop through each item in the array
        foreach ($this->toArray() as $key => $data) {
            // Check if the current item is an associative array with 'value' and 'label'
            if (is_array($data) && isset($data['value'], $data['label'])) {
                $options[] = [
                    'label' => $data['label'] instanceof Phrase ? $data['label'] : __($data['label']), // The display label of the option.
                    'value' => $data['value'], // Ensure the value is translated if it's a string
                ];
            } else {
                // Fallback for simple key-value pairs
                $options[] = [
                    'value' => $key instanceof Phrase ? $key : __($key), // Use the array key as the value
                    'label' => $data, // Use the array value as the label
                ];
            }
        }

        return $options;
    }

    /**
     * Retrieves all options with optional empty entry.
     *
     * @param  bool  $withEmpty  Whether to include an empty option at the start.
     *
     * @return array<int, array<string, string>> Options with or without an empty entry.
     */
    public function getAllOptions(bool $withEmpty = false): array
    {
        $options = $this->toOptionArray();

        if ($withEmpty) {
            Arr::unshift($options, ['value' => '', 'label' => '']);
        }

        return $options;
    }

    /**
     * Returns the region options as an associative array (region ID => region name).
     *
     * This is useful when you need to quickly retrieve all available regions
     * as an associative array (for example, to populate a configuration field).
     *
     * @param  bool  $withEmpty  Whether to include an empty option in the array.
     *
     * @return array<string, string> The available regions as key-value pairs.
     */
    public function getOptionsArray(bool $withEmpty = true): array
    {
        $options = [];

        // Convert the options into key-value pairs.
        foreach ($this->getAllOptions($withEmpty) as $option) {
            $options[$option['value']] = $option['label'];
        }

        return $options;
    }

    /**
     * Returns the label of a region given its ID.
     *
     * This method allows you to get the name (label) of a region by its ID.
     *
     * @param  string|int  $value  The region ID.
     *
     * @return string|false The region name if found, or false if not.
     */
    public function getOptionText($value)
    {
        // Get all options without the empty option.
        $options = $this->getAllOptions(false);

        // Loop through the options and find the label that matches the given value.
        foreach ($options as $item) {
            if ($item['value'] === $value) {
                return $item['label'];
            }
        }

        return false;
    }

    /**
     * Get the option hash for the dropdown.
     */
    public function toOptionHash(): array
    {
        return $this->toArray();
    }

    /**
     * Retrieve options in a "key-value" format.
     *
     * This method must be implemented by child classes to provide
     * specific key-value options for configuration.
     *
     * @return array An associative array of options in "key => value" format.
     */
    abstract public function toArray(): array;
}
