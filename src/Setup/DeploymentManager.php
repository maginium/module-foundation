<?php

declare(strict_types=1);

namespace Maginium\Foundation\Setup;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Maginium\Foundation\Exceptions\LocalizedException;
use Maginium\Foundation\Helpers\StaticDeploy;
use Maginium\Framework\Component\Module;
use Maginium\Framework\Support\Facades\Filesystem;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Path;
use Maginium\Framework\Support\Reflection;
use Maginium\Framework\Support\Str;

/**
 * Abstract class DeploymentManager.
 *
 * This abstract class handles the installation process of the module, including:
 * - Deploying static assets (e.g., CSS, JS) to the public directory.
 * - Synchronizing media files (e.g., images, documents) for the module.
 *
 * The child class must provide the specific deployment directory path by implementing the `deployPath` method.
 *
 * @method string deployPath() Returns the deployment directory path for the module's assets.
 */
abstract class DeploymentManager implements InstallDataInterface
{
    /**
     * @var StaticDeploy Helper class for deploying static files to the public directory.
     */
    private StaticDeploy $pubDeployer;

    /**
     * DeploymentManager constructor.
     *
     * Initializes the necessary helper classes for asset deployment and media synchronization.
     *
     * @param  StaticDeploy  $pubDeployer  Helper class for deploying static files.
     */
    public function __construct(
        StaticDeploy $pubDeployer,
    ) {
        $this->pubDeployer = $pubDeployer;

        // Set Log class name
        Log::setClassName(static::class);
    }

    /**
     * Install data method.
     *
     * This method is executed during module installation to:
     * 1. Deploy static assets (e.g., CSS, JS) to the public directory.
     * 2. Synchronize media files from the deployment directory defined in the child class.
     *
     * @param  ModuleDataSetupInterface  $setup  The setup interface for database schema and data setup.
     * @param  ModuleContextInterface  $context  The module context interface providing module information.
     *
     * @throws LocalizedException If the deployment path is not defined or invalid.
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context,
    ): void {
        // Start the setup process for applying installation steps.
        $setup->startSetup();

        // Obtain the module name from the namespace of the current class.
        $moduleName = Reflection::getNamespaceName(static::class, 2);

        // Retrieve the module's absolute path.
        $modulePath = Module::getPath($moduleName);

        // Define the path to the public (PUB) assets directory.
        $publicAssetsPath = Path::join($modulePath, DirectoryList::PUB);

        // Deploy static assets to the public directory, if available.
        if (Filesystem::isDirectory($publicAssetsPath)) {
            $this->pubDeployer->deployFolder($publicAssetsPath);
        } else {
            Log::warning(
                Str::format('Public assets directory not found at %s. Skipping deployment.', $publicAssetsPath),
            );
        }

        // Finalize the setup process.
        $setup->endSetup();
    }
}
