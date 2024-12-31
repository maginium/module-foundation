<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enumeration representing sorting order.
 *
 * @method static self ASC() Ascending order.
 * @method static self DESC() Descending order.
 */
class SortOrder extends Enum
{
    /**
     * Ascending order.
     * Sorts items from the smallest to the largest.
     */
    #[Label('Ascending')]
    #[Description('Sorts items from the smallest to the largest.')]
    public const ASC = 'ASC';

    /**
     * Descending order.
     * Sorts items from the largest to the smallest.
     */
    #[Label('Descending')]
    #[Description('Sorts items from the largest to the smallest.')]
    public const DESC = 'DESC';
}
