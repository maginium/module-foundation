<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing different environment types.
 *
 * @enum {string}
 *
 * @method static self TEST() Test environment.
 * @method static self STAGING() Staging environment.
 * @method static self PRODUCTION() Production environment.
 * @method static self DEVELOPMENT() Development environment.
 */
class Enviroment extends Enum
{
    /**
     * Test environment.
     */
    #[Label('Test')]
    #[Description('Represents the test environment, used for running tests and ensuring the functionality before deployment.')]
    public const TEST = 'test';

    /**
     * Staging environment.
     */
    #[Label('Staging')]
    #[Description('Represents the staging environment, used for pre-production testing and review.')]
    public const STAGING = 'staging';

    /**
     * Production environment.
     */
    #[Label('Production')]
    #[Description('Represents the production environment, where the application is live and accessible to end users.')]
    public const PRODUCTION = 'production';

    /**
     * Development environment.
     */
    #[Label('Development')]
    #[Description('Represents the development environment, where new features and updates are developed and tested.')]
    public const DEVELOPMENT = 'development';
}
