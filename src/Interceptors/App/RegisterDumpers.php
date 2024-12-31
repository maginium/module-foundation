<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interceptors\App;

use Closure;
use Magento\Framework\App\Http as AppHttp;
use Maginium\Framework\Console\CliDumper;
use Maginium\Framework\Support\Debug\HtmlDumper;

/**
 * Class RegisterDumpers.
 *
 * This class serves as an interceptor for loading environment variables before
 * the application processes the request. It ensures that the appropriate dumper
 * is registered based on the environment and the output format.
 */
class RegisterDumpers
{
    /**
     * Load environment variables and register the appropriate dumper.
     *
     * This method intercepts the `aroundLaunch` method in the `AppHttp` class,
     * ensuring that environment variables are loaded and the appropriate dumper
     * is registered based on the format specified in `VAR_DUMPER_FORMAT` or the
     * PHP SAPI.
     *
     * @param  AppHttp  $subject  The subject (in this case, the app HTTP) being observed.
     * @param  Closure  $proceed  The original method being intercepted.
     *
     * @return mixed The result of the original method.
     */
    public function aroundLaunch(AppHttp $subject, Closure $proceed)
    {
        // Fetch the format from the environment variable, falling back to null if not set.
        $format = $_SERVER['VAR_DUMPER_FORMAT'] ?? null;

        // Call the method to register the appropriate dumper.
        $this->registerDumperBasedOnFormat($format);

        // Proceed with the original `launch` method.
        return $proceed();
    }

    /**
     * Register the appropriate dumper based on the format.
     *
     * This method checks the format specified in the `VAR_DUMPER_FORMAT` environment
     * variable or defaults to the PHP SAPI and registers the respective dumper.
     *
     * @param  string|null  $format  The format for dumper registration.
     */
    private function registerDumperBasedOnFormat(?string $format): void
    {
        match (true) {
            // If the format is 'server', do nothing.
            $format === 'server' => null,

            // If the format is 'cli', register the CLI dumper.
            $format === 'cli' => CliDumper::register(BP),

            // If the format is 'html', register the HTML dumper.
            $format === 'html' => HtmlDumper::register(BP),

            // If the format is a TCP URL, do nothing (likely for external connections).
            $format && parse_url($format, PHP_URL_SCHEME) === 'tcp' => null,

            // Default case: If the PHP SAPI is 'cli' or 'phpdbg', register the CLI dumper.
            // Otherwise, register the HTML dumper.
            default => in_array(PHP_SAPI, ['cli', 'phpdbg']) ? CliDumper::register(BP) : HtmlDumper::register(BP),
        };
    }
}
