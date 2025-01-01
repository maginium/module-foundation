<?php

declare(strict_types=1);

namespace Maginium\Foundation\Abstracts;

use Illuminate\Contracts\Support\Arrayable;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource as BaseAbstractSource;
use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Phrase;

/**
 * Abstract Class AbstractSource.
 *
 * A base class for EAV (Entity-Attribute-Value) attribute source models.
 * Provides utility methods for generating options in various formats.
 * Child classes must implement the `toArray` method to define the attribute options.
 */
abstract class AbstractAttributeSource extends BaseAbstractSource implements Arrayable, OptionSourceInterface
{
    /**
     * Retrieve all attribute options for the EAV attribute.
     *
     * Generates the options array if it hasn't been populated yet and returns it.
     * This method ensures that the attribute options are translated if necessary.
     *
     * @return array List of attribute options in the form of ['value' => ..., 'label' => ...].
     */
    public function getAllOptions(): array
    {
        // Check if the options array is already populated.
        if ($this->_options === null) {
            // Generate the options array using the `toArray` method.
            $this->_options = $this->toArray();

            // Loop through each key-value pair and translate labels if needed.
            foreach ($this->_options as $value => $label) {
                // Check if $label is an instance of \Magento\Framework\Phrase.
                // If it's not a Phrase object, we apply translation.
                if (! $label instanceof Phrase) {
                    // Translate the label if it's not already a Phrase object.
                    $label = __($label);
                }

                // Assign the translated label back to the options array.
                $this->_options[$value] = [
                    'value' => $value,
                    'label' => $label, // Use the translated label here.
                ];
            }
        }

        // Return the cached options array.
        return $this->_options;
    }

    /**
     * Retrieve options in a key-value format.
     *
     * Must be implemented by child classes to provide specific options.
     * The child class should return an associative array where keys are option values
     * and values are option labels.
     *
     * @return array<string, string> Associative array of options in "key => value" format.
     */
    abstract public function toArray(): array;
}
