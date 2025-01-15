<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing possible orientations.
 *
 * @method static self LANDSCAPE() Used for landscape orientation.
 * @method static self PORTRAIT() Used for portrait orientation.
 * @method static self HORIZONTAL() Used for horizontal orientation.
 * @method static self VERTICAL() Used for vertical orientation.
 * @method static self DIAGONAL() Used for diagonal orientation.
 * @method static self INVERSE_DIAGONAL() Used for inverse diagonal orientation.
 * @method static self STANDALONE() Used for standalone elements or layouts.
 */
class Orientations extends Enum
{
    /**
     * Landscape orientation.
     * Typically used for wide layouts or screens.
     */
    #[Label('Landscape')]
    #[Description('Typically used for wide layouts or screens.')]
    public const LANDSCAPE = 'landscape';

    /**
     * Portrait orientation.
     * Typically used for tall layouts or screens.
     */
    #[Label('Portrait')]
    #[Description('Typically used for tall layouts or screens.')]
    public const PORTRAIT = 'portrait';

    /**
     * Horizontal orientation.
     * Used for layouts or elements arranged horizontally.
     */
    #[Label('Horizontal')]
    #[Description('Used for layouts or elements arranged horizontally.')]
    public const HORIZONTAL = 'horizontal';

    /**
     * Vertical orientation.
     * Used for layouts or elements arranged vertically.
     */
    #[Label('Vertical')]
    #[Description('Used for layouts or elements arranged vertically.')]
    public const VERTICAL = 'vertical';

    /**
     * Diagonal orientation.
     * Used for layouts or elements arranged diagonally.
     */
    #[Label('Diagonal')]
    #[Description('Used for layouts or elements arranged diagonally.')]
    public const DIAGONAL = 'diagonal';

    /**
     * Inverse diagonal orientation.
     * Used for layouts or elements arranged in an inverse diagonal direction.
     */
    #[Label('Inverse Diagonal')]
    #[Description('Used for layouts or elements arranged in an inverse diagonal direction.')]
    public const INVERSE_DIAGONAL = 'inverse-diagonal';

    /**
     * Standalone mode.
     * Used for elements or layouts that operate independently of others.
     */
    #[Label('Standalone')]
    #[Description('Used for elements or layouts that operate independently of others.')]
    public const STANDALONE = 'standalone';
}
