<?php

declare(strict_types=1);

namespace Maginium\Foundation\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Grammar;
use Maginium\Framework\Console\CliDumper;
use Maginium\Framework\Support\Debug\HtmlDumper;
use Maginium\Framework\Support\ServiceProvider;
use Maginium\Framework\Support\Validator;
use Symfony\Component\VarDumper\Caster\StubCaster;
use Symfony\Component\VarDumper\Cloner\AbstractCloner;

/**
 * Class DumpersServiceProvider.
 *
 * This service provider registers different var dumpers based on the environment
 * and the output format specified. It configures the appropriate dumper for the
 * application to use, whether it's a CLI dumper, HTML dumper, or other supported formats.
 *
 * The dumper is used for debugging and dumping variables in various formats (CLI, HTML, etc.)
 * based on the environment or configuration.
 */
class DumpersServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * This method is used to register services or bindings into the service container.
     * Here, it registers the dumper based on the current configuration or environment.
     *
     * @return void
     */
    public function register(): void
    {
        // Ensure the parent provider's register method is also called to allow parent class functionality
        parent::register();

        // Register the appropriate var dumper based on environment and configuration
        $this->registerDumper();
    }

    /**
     * Register a var dumper (with source) to debug variables.
     *
     * This method configures various casters for internal classes used in debugging,
     * and sets up the appropriate dumper based on the environment variable `VAR_DUMPER_FORMAT`.
     *
     * The supported formats are:
     * - 'server' - No action, used for server-based environments.
     * - 'cli' - Registers the CLI dumper for command-line interfaces.
     * - 'html' - Registers the HTML dumper for web environments.
     * - 'tcp' - No action, reserved for external TCP-based connections.
     * - Default - Uses CLI dumper in CLI environments, HTML dumper otherwise.
     *
     * @return void
     */
    public function registerDumper(): void
    {
        // Register casters for the core classes to ensure their internal data is hidden during dumping
        AbstractCloner::$defaultCasters[Factory::class] ??= [StubCaster::class, 'cutInternals'];
        AbstractCloner::$defaultCasters[Grammar::class] ??= [StubCaster::class, 'cutInternals'];
        AbstractCloner::$defaultCasters[Container::class] ??= [StubCaster::class, 'cutInternals'];
        AbstractCloner::$defaultCasters[Dispatcher::class] ??= [StubCaster::class, 'cutInternals'];
        AbstractCloner::$defaultCasters[ConnectionInterface::class] ??= [StubCaster::class, 'cutInternals'];

        // Fetch the format from the environment variable `VAR_DUMPER_FORMAT`
        // Defaults to null if not set
        $format = $_SERVER['VAR_DUMP_FORMAT'] ?? null;

        // Fetch the server TCP from the environment variable `VAR_DUMPER_SERVER`
        // Defaults to '127.0.0.1:9912' if not set
        $server = $_SERVER['VAR_DUMP_SERVER'] ?? 'tcp://127.0.0.1:9912';

        // Store the server value back into the `$_SERVER` superglobal if it's set.
        if ($server) {
            $_SERVER['VAR_DUMPER_SERVER'] = $server;
        }

        // Choose the appropriate dumper based on the format or PHP environment
        match (true) {
            // If the format is 'server', no action is taken (likely server-side environment)
            $format === 'server' => null,

            // If the format is 'cli', register the CLI dumper
            $format === 'cli' => CliDumper::register(BP),

            // If the format is 'html', register the HTML dumper
            $format === 'html' => HtmlDumper::register(BP),

            // If the format is a TCP URL, no action is taken (likely for external TCP-based connections)
            $format && parse_url($format, PHP_URL_SCHEME) === 'tcp' => $server,

            // Default case: Register the CLI dumper for CLI environments,
            // or the HTML dumper for all other environments (e.g., web browsers)
            default => Validator::inArray(PHP_SAPI, ['cli', 'phpdbg']) ? CliDumper::register(BP) : HtmlDumper::register(BP),
        };
    }
}
