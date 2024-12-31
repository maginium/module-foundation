<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing text directions.
 * Used to specify the direction of text flow.
 *
 * @method static self LTR() Left-to-Right text direction. Common in languages like English and most other European languages.
 * @method static self RTL() Right-to-Left text direction. Common in languages like Arabic and Hebrew.
 */
class Direction extends Enum
{
    /**
     * Left-to-Right text direction.
     * Common in languages like English and most other European languages.
     */
    #[Label('Left-to-Right')]
    #[Description('Represents the text direction from left to right. Common in languages like English and most other European languages.')]
    public const LTR = 'ltr';

    /**
     * Right-to-Left text direction.
     * Common in languages like Arabic and Hebrew.
     */
    #[Label('Right-to-Left')]
    #[Description('Represents the text direction from right to left. Common in languages like Arabic and Hebrew.')]
    public const RTL = 'rtl';
}
