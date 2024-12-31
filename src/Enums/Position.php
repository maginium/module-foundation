<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing possible positions.
 *
 * @method static self LEFT() Used to align or place an element to the left.
 * @method static self RIGHT() Used to align or place an element to the right.
 * @method static self TOP() Used to align or place an element at the top.
 * @method static self BOTTOM() Used to align or place an element at the bottom.
 * @method static self TOP_LEFT() Used to align or place an element at the top-left corner.
 * @method static self TOP_RIGHT() Used to align or place an element at the top-right corner.
 * @method static self BOTTOM_LEFT() Used to align or place an element at the bottom-left corner.
 * @method static self BOTTOM_RIGHT() Used to align or place an element at the bottom-right corner.
 */
class Position extends Enum
{
    /**
     * Left position.
     * Used to align or place an element to the left.
     */
    #[Label('Left')]
    #[Description('Used to align or place an element to the left.')]
    public const LEFT = 'left';

    /**
     * Right position.
     * Used to align or place an element to the right.
     */
    #[Label('Right')]
    #[Description('Used to align or place an element to the right.')]
    public const RIGHT = 'right';

    /**
     * Top position.
     * Used to align or place an element at the top.
     */
    #[Label('Top')]
    #[Description('Used to align or place an element at the top.')]
    public const TOP = 'top';

    /**
     * Bottom position.
     * Used to align or place an element at the bottom.
     */
    #[Label('Bottom')]
    #[Description('Used to align or place an element at the bottom.')]
    public const BOTTOM = 'bottom';

    /**
     * Top-left position.
     * Used to align or place an element at the top-left corner.
     */
    #[Label('Top Left')]
    #[Description('Used to align or place an element at the top-left corner.')]
    public const TOP_LEFT = 'top-left';

    /**
     * Top-right position.
     * Used to align or place an element at the top-right corner.
     */
    #[Label('Top Right')]
    #[Description('Used to align or place an element at the top-right corner.')]
    public const TOP_RIGHT = 'top-right';

    /**
     * Bottom-left position.
     * Used to align or place an element at the bottom-left corner.
     */
    #[Label('Bottom Left')]
    #[Description('Used to align or place an element at the bottom-left corner.')]
    public const BOTTOM_LEFT = 'bottom-left';

    /**
     * Bottom-right position.
     * Used to align or place an element at the bottom-right corner.
     */
    #[Label('Bottom Right')]
    #[Description('Used to align or place an element at the bottom-right corner.')]
    public const BOTTOM_RIGHT = 'bottom-right';
}
