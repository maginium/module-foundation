<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing different types of devices.
 *
 * @method static self MOBILE() Represents a mobile device.
 * @method static self TABLET() Represents a tablet device.
 * @method static self DESKTOP() Represents a desktop device.
 * @method static self UNKNOWN() Represents an unknown device type.
 */
class DeviceType extends Enum
{
    /**
     * Represents a mobile device.
     */
    #[Label('Mobile Device')]
    #[Description('Represents a mobile device.')]
    public const MOBILE = 'mobile';

    /**
     * Represents a tablet device.
     */
    #[Label('Tablet Device')]
    #[Description('Represents a tablet device.')]
    public const TABLET = 'tablet';

    /**
     * Represents a desktop device.
     */
    #[Label('Desktop Device')]
    #[Description('Represents a desktop device.')]
    public const DESKTOP = 'desktop';

    /**
     * Represents an unknown device type.
     */
    #[Label('Unknown Device')]
    #[Description('Represents an unknown device type.')]
    public const UNKNOWN = 'unknown';
}
