<?php

declare(strict_types=1);

namespace Maginium\Foundation\Interceptors\Framework\Module;

use Magento\Framework\App\DeploymentConfig\Writer;
use Magento\Framework\Config\File\ConfigFilePool;
use Magento\Framework\Module\ConflictChecker;
use Magento\Framework\Module\DependencyChecker;
use Magento\Framework\Module\ModuleList;
use Magento\Framework\Module\ModuleList\Loader;
use Magento\Framework\Module\Status as BaseStatus;
use Maginium\Foundation\Exceptions\LogicException;
use Maginium\Framework\Support\Arr;
use Maginium\Framework\Support\Php;
use Maginium\Framework\Support\Str;

/**
 * A service for controlling module status.
 */
class Status extends BaseStatus
{
    /**
     * Namespace for targeted modules.
     */
    public const TARGETED_MODULES_NAMESPACE = 'Maginium';

    /**
     * Module list loader.
     *
     * @var Loader
     */
    private Loader $loader;

    /**
     * Module list.
     *
     * @var ModuleList
     */
    private ModuleList $list;

    /**
     * Deployment config writer.
     *
     * @var Writer
     */
    private Writer $writer;

    /**
     * Constructor.
     */
    public function __construct(
        Loader $loader,
        Writer $writer,
        ModuleList $list,
        ConflictChecker $conflictChecker,
        DependencyChecker $dependencyChecker,
    ) {
        parent::__construct(
            $loader,
            $list,
            $writer,
            $conflictChecker,
            $dependencyChecker,
        );

        $this->list = $list;
        $this->loader = $loader;
        $this->writer = $writer;
    }

    /**
     * Sets specified modules to enabled or disabled state.
     *
     * Performs other necessary routines, such as cache cleanup
     *
     * @param  bool  $isEnabled
     * @param  string[]  $modules
     */
    public function setIsEnabled($isEnabled, $modules): void
    {
        // Get the status for each module based on the provided list and enable flag
        $moduleStatus = $this->getModuleStatus($isEnabled, $modules);

        // Update the status of modules in the configuration
        $this->updateModuleStatus($moduleStatus);
    }

    /**
     * Get the status of modules based on the provided list and enable flag.
     *
     * This method checks the current status of the specified modules and
     * returns an array indicating whether each module is enabled (1)
     * or disabled (0). The status is determined based on the provided
     * enable flag and the current configuration.
     *
     * @param  bool  $enableModules  Whether the modules should be enabled or disabled
     * @param  string[]  $modules  The list of module names to check the status for
     *
     * @return array An array containing the status of each module, with module names as keys
     */
    private function getModuleStatus(bool $enableModules, array $modules): array
    {
        // Initialize an empty array to hold the status of each module
        $moduleStatus = [];

        // Iterate over all modules retrieved from the list of modules
        foreach ($this->getAllModules($modules) as $name) {
            // Check if the current module is present in the module list
            $currentStatus = $this->list->has($name);

            // Determine the status based on the enable flag or current status
            $moduleStatus[$name] = Php::inArray($name, $modules)
                ? (int)$enableModules // If the module is in the list, set it to the enable flag
                : (int)$currentStatus; // Otherwise, retain the current status
        }

        // Return the final module status array
        return $moduleStatus;
    }

    /**
     * Update the status of modules in the configuration.
     *
     * This method processes the current module status and separates core
     * modules from targeted modules. It then merges them and saves
     * the updated configuration for the modules.
     *
     * @param  string[]  $moduleStatus  An array containing the status of each module
     */
    private function updateModuleStatus(array $moduleStatus): void
    {
        // Initialize arrays to hold core modules and targeted modules separately
        $coreModules = [];
        $targetedModules = [];

        // Sort targeted modules to the end of the final status array
        foreach ($moduleStatus as $moduleKey => $status) {
            // Check if the module key does not belong to targeted modules namespace
            if (! Str::contains($moduleKey, self::TARGETED_MODULES_NAMESPACE)) {
                // Add to core modules
                $coreModules[$moduleKey] = $status;
            } else {
                // Add to targeted modules
                $targetedModules[$moduleKey] = $status;
            }
        }

        // Merge the core modules and targeted modules to maintain order
        $sortedModuleStatus = Arr::merge($coreModules, $targetedModules);

        // Save the updated module status into the configuration file
        $this->writer->saveConfig(
            [ConfigFilePool::APP_CONFIG => ['modules' => $sortedModuleStatus]],
            true, // Indicate that the configuration should be saved
        );
    }

    /**
     * Gets all modules and filters against the specified list.
     *
     * This method loads all available modules and checks if the specified
     * modules exist. It throws a LogicException if any unknown modules
     * are found in the provided list.
     *
     * @param  string[]  $modules  The list of module names to check
     *
     * @throws LogicException If any of the specified modules are unknown
     *
     * @return array Returns the keys of all loaded modules
     */
    private function getAllModules(array $modules): array
    {
        // Load all available modules into an array
        $all = $this->loader->load();

        // Initialize an array to hold unknown modules
        $unknown = [];

        // Check each module in the provided list against the loaded modules
        foreach ($modules as $name) {
            // If a module is not found in the loaded modules, add it to unknown
            if (! isset($all[$name])) {
                $unknown[] = $name;
            }
        }

        // If there are any unknown modules, throw a LogicException
        if ($unknown) {
            throw LogicException::make(
                "Unknown module(s): '" . Php::implode("', '", $unknown) . "'",
            );
        }

        // Return the keys of all loaded modules
        return Arr::keys($all);
    }
}
