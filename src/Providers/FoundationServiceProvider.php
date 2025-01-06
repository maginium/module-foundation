<?php

declare(strict_types=1);

namespace Maginium\Foundation\Providers;

use Maginium\Framework\Support\ServiceProvider;

/**
 * Class FoundationServiceProvider.
 *
 * This class is a service provider for registering and bootstrapping any services
 * related to the foundation of the application. It extends the base `ServiceProvider`
 * class and provides methods to register and bootstrap services.
 */
class FoundationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * This method is called during the service provider registration phase.
     * Use it to bind services, classes, or configurations into the container.
     * The services registered here will be available for dependency injection
     * throughout the application.
     *
     * @return void
     */
    public function register(): void
    {
        // Call the parent register method to ensure any parent registration logic is executed
        parent::register();
    }
}
