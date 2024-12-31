<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing user types.
 *
 * @method static self USER() Represents a user.
 * @method static self CUSTOMER() Represents a customer.
 * @method static self GUEST() Represents a guest.
 * @method static self ADMIN() Represents an admin.
 */
class UserType extends Enum
{
    /**
     * Represents a user.
     */
    #[Label('User')]
    #[Description('A general user with standard access.')]
    public const USER = 'user';

    /**
     * Represents a customer.
     */
    #[Label('Customer')]
    #[Description('A customer with access related to purchasing or managing orders.')]
    public const CUSTOMER = 'customer';

    /**
     * Represents a guest.
     */
    #[Label('Guest')]
    #[Description('A guest with limited access, typically without the ability to make purchases or access account-specific features.')]
    public const GUEST = 'guest';

    /**
     * Represents an admin.
     */
    #[Label('Admin')]
    #[Description('An admin with full access to the system, including management of users, settings, and configurations.')]
    public const ADMIN = 'admin';
}
