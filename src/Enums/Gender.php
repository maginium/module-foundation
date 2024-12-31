<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Magento\Customer\Model\Customer;
use Maginium\Framework\Enum\Enum;
use Maginium\Framework\Support\Facades\EavConfig;
use Maginium\Framework\Support\Str;

/**
 * Enum representing gender values.
 *
 * @method static self MALE() Represents male gender.
 * @method static self FEMALE() Represents female gender.
 * @method static self OTHER() Represents other gender.
 */
class Gender extends Enum
{
    /**
     * The attribute code for the gender attribute.
     */
    private const GENDER_ATTRIBUTE = 'gender';

    /**
     * Optional initialization method for Gender.
     *
     * This method fetches gender types dynamically from EAV configuration and defines them as enum values.
     */
    protected static function init(): void
    {
        // Fetch gender attribute from EAV configuration
        $genderAttribute = EavConfig::getAttribute(Customer::ENTITY, self::GENDER_ATTRIBUTE);

        // Get all options for the gender attribute
        $options = $genderAttribute->getSource()->getAllOptions();

        // Iterate through each option and define as enum value
        foreach ($options as $option) {
            // Skip options with value 0 (assuming these are not valid gender types)
            // if ((int)$option['value'] !== 0) {
            // Convert label to uppercase for enum key
            $key = Str::upper($option['label']);

            // Cast value to integer for enum value
            $value = (int)$option['value'];

            // Define enum value dynamically
            static::defineEnumValue($key, $value);
            // }
        }
    }
}
