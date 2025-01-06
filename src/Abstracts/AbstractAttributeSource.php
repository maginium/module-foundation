<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Illuminate\Contracts\Support\Arrayable;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource as BaseAbstractSource;
use Magento\Framework\Data\OptionSourceInterface;
use Maginium\Framework\Support\Arr;

/**
 * Abstract Class AbstractAttributeSource.
 *
 * Serves as a base class for creating EAV (Entity-Attribute-Value) attribute source models.
 * Provides utility methods for generating attribute options in various formats.
 *
 * Responsibilities:
 * - Defines a contract for child classes to implement the `toArray` method.
 * - Ensures options are properly structured for use in Magento's EAV system.
 */
abstract class AbstractAttributeSource extends BaseAbstractSource implements Arrayable, OptionSourceInterface
{
    /**
     * Retrieve all attribute options for the EAV attribute.
     *
     * This method initializes the `_options` property if it's not already populated.
     * Options are formatted as an array of associative arrays containing `label` and `value` keys.
     *
     * @param bool $withEmpty Whether to include an empty option at the beginning of the options list.
     * @param bool $defaultValues Reserved parameter for additional functionality if needed.
     *
     * @return array List of attribute options in the form of ['value' => ..., 'label' => ...].
     */
    public function getAllOptions($withEmpty = true, $defaultValues = false)
    {
        // Check if the `_options` property has already been populated to avoid redundant processing.
        if (! $this->_options) {
            // Populate `_options` by transforming the output of `toArray` into the required format.
            $this->_options = $this->toArray();

            // Iterate over each key-value pair returned by `toArray`.
            foreach ($this->_options as $value => $label) {
                // Convert each option into an associative array containing `label` and `value` keys.
                $this->_options[$value] = [
                    'label' => $label, // Assign the label for the option.
                    'value' => $value, // Assign the value for the option.
                ];
            }
        }

        // If `$withEmpty` is true, prepend an empty option to the list.
        if ($withEmpty) {
            $options = $this->addEmptyOption($this->_options);
        }

        // Return the prepared options array.
        return $options;
    }

    /**
     * Retrieve options in a key-value format.
     *
     * Child classes must implement this method to provide specific options for the attribute.
     * The returned array should map option values to their corresponding labels.
     *
     * @return array<string, string> Associative array of options in "key => value" format.
     */
    abstract public function toArray(): array;

    /**
     * Add an empty option to the beginning of the options array.
     *
     * This utility method adds an empty option with a default label.
     * The empty option is often used as a placeholder for select fields in forms.
     *
     * @param array $options Existing options array to which the empty option will be added.
     *
     * @return array Modified options array with the empty option prepended.
     */
    private function addEmptyOption(array $options)
    {
        // Use a helper method to prepend the empty option to the beginning of the array.
        Arr::unshift($options, ['label' => 'Please Select an Option', 'value' => '']);

        // Return the updated options array.
        return $options;
    }
}
