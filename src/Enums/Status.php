<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Class Status
 * Enum representing various status constants.
 *
 * @method static self ENABLED() Represents the enabled status constant.
 * @method static self DISABLED() Represents the disabled status constant.
 * @method static self ACTIVE() Represents the active status constant.
 * @method static self INACTIVE() Represents the inactive status constant.
 * @method static self TRUE() Represents the true status constant (binary).
 * @method static self FALSE() Represents the false status constant (binary).
 * @method static self YES() Represents the affirmative status constant (binary).
 * @method static self NO() Represents the negative status constant (binary).
 */
class Status extends Enum
{
    /**
     * Status enabled constant.
     */
    #[Label('Enabled')]
    #[Description('The status indicating that an item is active or enabled.')]
    public const ENABLED = 1;

    /**
     * Status disabled constant.
     */
    #[Label('Disabled')]
    #[Description('The status indicating that an item is inactive or disabled.')]
    public const DISABLED = 0;

    /**
     * Status active constant (binary).
     */
    #[Label('Active')]
    #[Description('The status indicating that an item is currently active or in use.')]
    public const ACTIVE = 1;

    /**
     * Status inactive constant.
     */
    #[Label('Inactive')]
    #[Description('The status indicating that an item is no longer active or relevant.')]
    public const INACTIVE = 0;

    /**
     * Status true constant (binary).
     */
    #[Label('True')]
    #[Description('The status representing a boolean true value.')]
    public const TRUE = 1;

    /**
     * Status false constant (binary).
     */
    #[Label('False')]
    #[Description('The status representing a boolean false value.')]
    public const FALSE = 0;

    /**
     * Status yes constant (binary).
     */
    #[Label('Yes')]
    #[Description('The status representing an affirmative answer or true value.')]
    public const YES = 1;

    /**
     * Status no constant (binary).
     */
    #[Label('No')]
    #[Description('The status representing a negative answer or false value.')]
    public const NO = 0;
}
