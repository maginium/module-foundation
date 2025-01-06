<?php

declare(strict_types=1);


namespace Magento\Setup\Models;

use ArrayObject;
use Doctrine\DBAL\Exception\DriverException;
use Magento\Backend\Setup\ConfigOptionsList as BackendConfigOptionsList;
use Magento\Config\Model\Config\Factory;
use Magento\Framework\App\Area;
use Magento\Framework\App\Cache\Manager;
use Magento\Framework\App\Cache\Type\Config as ConfigCache;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\DeploymentConfig\Reader;
use Magento\Framework\App\DeploymentConfig\Writer;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\MaintenanceMode;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\State\CleanupFiles;
use Magento\Framework\Code\Generator\Autoloader;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Config\ConfigOptionsListConstants;
use Magento\Framework\Config\Data\ConfigData;
use Magento\Framework\Config\File\ConfigFilePool;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Adapter\Pdo\Mysql;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\RuntimeException;
use Magento\Framework\Filesystem;
use Magento\Framework\Indexer\IndexerInterface;
use Magento\Framework\Indexer\IndexerRegistry;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Framework\Module\ModuleList\Loader as ModuleLoader;
use Magento\Framework\Module\ModuleListInterface;
use Magento\Framework\Module\ModuleResource;
use Magento\Framework\Mview\TriggerCleaner;
use Magento\Framework\Registry;
use Magento\Framework\Setup\Declaration\Schema\DryRunLogger;
use Magento\Framework\Setup\FilePermissions;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\LoggerInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\PatchApplier;
use Magento\Framework\Setup\Patch\PatchApplierFactory;
use Magento\Framework\Setup\SampleData\State;
use Magento\Framework\Setup\SchemaPersistor;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Validation\ValidationException;
use Magento\Indexer\Model\Indexer\Collection;
use Magento\RemoteStorage\Setup\ConfigOptionsList as RemoteStorageValidator;
use Magento\Setup\Console\Command\InstallCommand;
use Magento\Setup\Controller\ResponseTypeInterface;
use Magento\Setup\Model\AdminAccount;
use Magento\Setup\Model\AdminAccountFactory;
use Magento\Setup\Model\ConfigModel as SetupConfigModel;
use Magento\Setup\Model\DeclarationInstaller;
use Magento\Setup\Model\Installer\Progress;
use Magento\Setup\Model\ModuleContext;
use Magento\Setup\Model\ObjectManagerProvider;
use Magento\Setup\Model\PhpReadinessCheck;
use Magento\Setup\Model\SearchConfig;
use Magento\Setup\Model\StoreConfigurationDataMapper;
use Magento\Setup\Module\ConnectionFactory;
use Magento\Setup\Module\DataSetupFactory;
use Magento\Setup\Module\SetupFactory;
use Magento\Setup\Validator\DbValidator;
use Magento\Store\Model\Store;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Foundation\Exceptions\LogicException;
use ReflectionException;
use Zend_Db_Exception;

/**
 * Class Installer contains the logic to install Magento application.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class Installer
{
    /**
     * Namespace for targeted modules.
     */
    public const TARGETED_MODULES_NAMESPACE = 'Maginium';

    /**
     * Parameters for enabling/disabling modules.
     */
    public const ENABLE_MODULES = 'enable-modules';

    public const DISABLE_MODULES = 'disable-modules';

    /**
     * Formatting for progress log.
     */
    public const PROGRESS_LOG_RENDER = '[Progress: %d / %d]';

    public const PROGRESS_LOG_REGEX = '/\[Progress: (\d+) \/ (\d+)\]/s';

    /**
     * Instance types for schema and data handler.
     */
    public const SCHEMA_INSTALL = InstallSchemaInterface::class;

    public const SCHEMA_UPGRADE = UpgradeSchemaInterface::class;

    public const DATA_INSTALL = InstallDataInterface::class;

    public const DATA_UPGRADE = UpgradeDataInterface::class;

    public const INFO_MESSAGE = 'message';

    public const ENTITY_TYPE_ORDER = 'order';

    /**
     * The lowest supported MySQL verion.
     */
    public const MYSQL_VERSION_REQUIRED = '5.6.0';

    /**
     * @var State
     */
    protected $sampleDataState;

    /**
     * File permissions checker.
     *
     * @var FilePermissions
     */
    private $filePermissions;

    /**
     * @var Writer
     */
    private $deploymentConfigWriter;

    /**
     * @var Reader
     */
    private $deploymentConfigReader;

    /**
     * @var ModuleListInterface
     */
    private $moduleList;

    /**
     * Module list loader.
     *
     * @var ModuleLoader
     */
    private $moduleLoader;

    /**
     * @var AdminAccountFactory
     */
    private $adminAccountFactory;

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    private $log;

    /**
     * DB connection factory.
     *
     * @var ConnectionFactory
     */
    private $connectionFactory;

    /**
     * Progress indicator.
     *
     * @var Installer\Progress
     */
    private $progress;

    /**
     * Maintenance mode handler.
     *
     * @var MaintenanceMode
     */
    private $maintenanceMode;

    /**
     * Magento filesystem.
     *
     * @var Filesystem
     */
    private $filesystem;

    /**
     * Installation information.
     *
     * @var array
     */
    private $installInfo = [];

    /**
     * @var DeploymentConfig
     */
    private $deploymentConfig;

    /**
     * @var DeploymentConfig
     */
    private $firstDeploymentConfig;

    /**
     * @var ObjectManagerProvider
     */
    private $objectManagerProvider;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var SetupConfigModel
     */
    private $setupConfigModel;

    /**
     * @var CleanupFiles
     */
    private $cleanupFiles;

    /**
     * @var DbValidator
     */
    private $dbValidator;

    /**
     * Factory to create \Magento\Setup\Module\Setup.
     *
     * @var SetupFactory
     */
    private $setupFactory;

    /**
     * Factory to create \Magento\Setup\Module\DataSetup.
     *
     * @var DataSetupFactory
     */
    private $dataSetupFactory;

    /**
     * @var ComponentRegistrar
     */
    private $componentRegistrar;

    /**
     * @var PhpReadinessCheck
     */
    private $phpReadinessCheck;

    /**
     * @var DeclarationInstaller
     */
    private $declarationInstaller;

    /**
     * @var SchemaPersistor
     */
    private $schemaPersistor;

    /**
     * @var PatchApplierFactory
     */
    private $patchApplierFactory;

    /**
     * @var TriggerCleaner
     */
    private $triggerCleaner;

    /**
     * Constructor.
     *
     *
     * @throws Exception
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        FilePermissions $filePermissions,
        Writer $deploymentConfigWriter,
        Reader $deploymentConfigReader,
        DeploymentConfig $deploymentConfig,
        ModuleListInterface $moduleList,
        ModuleLoader $moduleLoader,
        AdminAccountFactory $adminAccountFactory,
        LoggerInterface $log,
        ConnectionFactory $connectionFactory,
        MaintenanceMode $maintenanceMode,
        Filesystem $filesystem,
        ObjectManagerProvider $objectManagerProvider,
        Context $context,
        SetupConfigModel $setupConfigModel,
        CleanupFiles $cleanupFiles,
        DbValidator $dbValidator,
        SetupFactory $setupFactory,
        DataSetupFactory $dataSetupFactory,
        State $sampleDataState,
        ComponentRegistrar $componentRegistrar,
        PhpReadinessCheck $phpReadinessCheck,
    ) {
        $this->filePermissions = $filePermissions;
        $this->deploymentConfigWriter = $deploymentConfigWriter;
        $this->deploymentConfigReader = $deploymentConfigReader;
        $this->moduleList = $moduleList;
        $this->moduleLoader = $moduleLoader;
        $this->adminAccountFactory = $adminAccountFactory;
        $this->log = $log;
        $this->connectionFactory = $connectionFactory;
        $this->maintenanceMode = $maintenanceMode;
        $this->filesystem = $filesystem;
        $this->installInfo[self::INFO_MESSAGE] = [];
        $this->deploymentConfig = $deploymentConfig;
        $this->objectManagerProvider = $objectManagerProvider;
        $this->context = $context;
        $this->setupConfigModel = $setupConfigModel;
        $this->cleanupFiles = $cleanupFiles;
        $this->dbValidator = $dbValidator;
        $this->setupFactory = $setupFactory;
        $this->dataSetupFactory = $dataSetupFactory;
        $this->sampleDataState = $sampleDataState;
        $this->componentRegistrar = $componentRegistrar;
        $this->phpReadinessCheck = $phpReadinessCheck;
        $this->schemaPersistor = $this->objectManagerProvider->get()->get(SchemaPersistor::class);
        $this->triggerCleaner = $this->objectManagerProvider->get()->get(TriggerCleaner::class);
        /* Note: Because this class is dependency injected with Laminas ServiceManager, but our plugins, and some
         * other classes also use the App\ObjectManager instead, we have to make sure that the DeploymentConfig object
         * from that ObjectManager gets reset as different steps in the installer will write to the deployment config.
         */
        $this->firstDeploymentConfig = ObjectManager::getInstance()->get(DeploymentConfig::class);
    }

    /**
     * Install Magento application.
     *
     * @param  ArrayObject|array  $request
     *
     * @throws FileSystemException
     * @throws LocalizedException
     * @throws RuntimeException
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function install($request)
    {
        $script[] = ['File permissions check...', 'checkInstallationFilePermissions', []];
        $script[] = ['Required extensions check...', 'checkExtensions', []];
        $script[] = ['Enabling Maintenance Mode...', 'setMaintenanceMode', [1]];
        $script[] = ['Installing deployment configuration...', 'installDeploymentConfig', [$request]];

        if (! empty($request[InstallCommand::INPUT_KEY_CLEANUP_DB])) {
            $script[] = ['Cleaning up database...', 'cleanupDb', []];
        }
        $script[] = ['Installing database schema:', 'installSchema', [$request]];
        $script[] = ['Installing search configuration...', 'installSearchConfiguration', [$request]];
        $script[] = [
            'Validating remote storage configuration...',
            'validateRemoteStorageConfiguration',
            [$request],
        ];
        $script[] = ['Installing user configuration...', 'installUserConfig', [$request]];
        $script[] = ['Enabling caches:', 'enableCaches', [true]];
        $script[] = ['Installing data...', 'installDataFixtures', [$request]];

        if (! empty($request[InstallCommand::INPUT_KEY_SALES_ORDER_INCREMENT_PREFIX])) {
            $script[] = [
                'Creating sales order increment prefix...',
                'installOrderIncrementPrefix',
                [$request[InstallCommand::INPUT_KEY_SALES_ORDER_INCREMENT_PREFIX]],
            ];
        }

        if ($this->isAdminDataSet($request)) {
            $script[] = ['Installing admin user...', 'installAdminUser', [$request]];
        }

        if (! $this->isDryRun($request)) {
            $script[] = ['Caches clearing:', 'cleanCaches', [$request]];
        }
        $script[] = ['Disabling Maintenance Mode:', 'setMaintenanceMode', [0]];
        $script[] = ['Post installation file permissions check...', 'checkApplicationFilePermissions', []];
        $script[] = ['Write installation date...', 'writeInstallationDate', []];

        if (empty($request['magento-init-params'])) {
            $script[] = ['Enabling Update by Schedule Indexer Mode...', 'setIndexerModeSchedule', []];
        }
        $estimatedModules = $this->createModulesConfig($request, true);
        $total = count($script) + 4 * count(array_filter($estimatedModules));
        $this->progress = new Progress($total, 0);

        $this->log->log('Starting Magento installation:');

        foreach ($script as $item) {
            /* Note: Because the $this->DeploymentConfig gets written to, but plugins use $this->firstDeploymentConfig,
             * we have to reset this one after each item of $script so the plugins will see the config updates. */
            $this->firstDeploymentConfig->resetData();
            [$message, $method, $params] = $item;
            $this->log->log($message);

            try {
                // phpcs:ignore Magento2.Functions.DiscouragedFunction
                call_user_func_array([$this, $method], $params);
            } catch (RuntimeException|DriverException $e) {
                $this->revertRemoteStorageConfiguration();

                throw $e;
            }
            $this->logProgress();
        }
        $this->log->logSuccess('Magento installation complete.');
        $this->log->logSuccess(
            'Magento Admin URI: /'
            . $this->deploymentConfig->get(BackendConfigOptionsList::CONFIG_PATH_BACKEND_FRONTNAME),
        );

        if ($this->progress->getCurrent() !== $this->progress->getTotal()) {
            throw LogicException::make('Installation progress did not finish properly.');
        }

        if ($this->sampleDataState->hasError()) {
            $this->log->log('Sample Data is installed with errors. See log file for details');
        }
    }

    /**
     * Check permissions of directories that are expected to be writable for installation.
     *
     * @throws \Exception
     *
     * @return void
     */
    public function checkInstallationFilePermissions()
    {
        $this->throwExceptionForNotWritablePaths(
            $this->filePermissions->getMissingWritablePathsForInstallation(),
        );
    }

    /**
     * Check required extensions for installation.
     *
     * @throws \Exception
     *
     * @return void
     */
    public function checkExtensions()
    {
        $phpExtensionsCheckResult = $this->phpReadinessCheck->checkPhpExtensions();

        if ($phpExtensionsCheckResult['responseType'] === ResponseTypeInterface::RESPONSE_TYPE_ERROR
            && isset($phpExtensionsCheckResult['data']['missing'])
        ) {
            $errorMsg = "Missing following extensions: '"
                . implode("' '", $phpExtensionsCheckResult['data']['missing']) . "'";

            // phpcs:ignore Magento2.Exceptions.DirectThrow
            throw Exception::make($errorMsg);
        }
    }

    /**
     * Check permissions of directories that are expected to be non-writable for application.
     *
     * @return void
     */
    public function checkApplicationFilePermissions()
    {
        $results = $this->filePermissions->getUnnecessaryWritableDirectoriesForApplication();

        if ($results) {
            $errorMsg = "For security, remove write permissions from these directories: '"
                . implode("' '", $results) . "'";
            $this->log->log($errorMsg);
            $this->installInfo[self::INFO_MESSAGE][] = $errorMsg;
        }
    }

    /**
     * Installs deployment configuration.
     *
     * @param  ArrayObject|array  $data
     *
     * @throws FileSystemException
     * @throws LocalizedException
     * @throws RuntimeException
     *
     * @return void
     */
    public function installDeploymentConfig($data)
    {
        $this->checkInstallationFilePermissions();
        $this->createModulesConfig($data);
        $userData = is_array($data) ? $data : $data->getArrayCopy();
        $this->setupConfigModel->process($userData);
        $deploymentConfigData = $this->deploymentConfig->get(ConfigOptionsListConstants::CONFIG_PATH_CRYPT_KEY);

        if (isset($deploymentConfigData)) {
            $this->installInfo[ConfigOptionsListConstants::KEY_ENCRYPTION_KEY] = $deploymentConfigData;
        }
        // reset object manager now that there is a deployment config
        $this->objectManagerProvider->reset();
    }

    /**
     * Install Magento if declaration mode was enabled.
     *
     *
     * @throws Exception
     *
     * @return void
     */
    public function declarativeInstallSchema(array $request)
    {
        $this->getDeclarationInstaller()->installSchema($request);
    }

    /**
     * Installs DB schema.
     *
     *
     * @throws Exception
     * @throws \Magento\Framework\Setup\Exception
     * @throws Zend_Db_Exception
     *
     * @return void
     */
    public function installSchema(array $request)
    {
        /** @var Registry $registry */
        $registry = $this->objectManagerProvider->get()->get(Registry::class);

        //For backward compatibility in install and upgrade scripts with enabled parallelization.
        $registry->register('setup-mode-enabled', true);

        $this->assertDbConfigExists();
        $this->assertDbAccessible();
        $setup = $this->setupFactory->create($this->context->getResources());
        $this->setupModuleRegistry($setup);
        $this->setupCoreTables($setup);
        $this->cleanMemoryTables($setup);
        $this->log->log('Schema creation/updates:');
        $this->declarativeInstallSchema($request);
        $this->handleDBSchemaData($setup, 'schema', $request);

        /** @var Mysql $adapter */
        $adapter = $setup->getConnection();
        $schemaListener = $adapter->getSchemaListener();

        if ($this->convertationOfOldScriptsIsAllowed($request)) {
            $schemaListener->setResource('default');
            $this->schemaPersistor->persist($schemaListener);
        }

        $registry->unregister('setup-mode-enabled');
    }

    /**
     * Installs data fixtures.
     *
     *
     * @throws Exception
     * @throws \Magento\Framework\Setup\Exception
     *
     * @return void
     */
    public function installDataFixtures(array $request = [])
    {
        /** @var Registry $registry */
        $registry = $this->objectManagerProvider->get()->get(Registry::class);

        //For backward compatibility in install and upgrade scripts with enabled parallelization.
        $registry->register('setup-mode-enabled', true);

        $this->assertDbConfigExists();
        $this->assertDbAccessible();
        $setup = $this->dataSetupFactory->create();
        $this->checkFilePermissionsForDbUpgrade();
        $this->log->log('Data install/update:');

        $this->handleDBSchemaData($setup, 'data', $request);

        $registry->unregister('setup-mode-enabled');
    }

    /**
     * Check permissions of directories that are expected to be writable for database upgrade.
     *
     * @throws \Exception If some of the required directories isn't writable
     *
     * @return void
     */
    public function checkFilePermissionsForDbUpgrade()
    {
        $this->throwExceptionForNotWritablePaths(
            $this->filePermissions->getMissingWritableDirectoriesForDbUpgrade(),
        );
    }

    /**
     * Get a module Resource object.
     */
    public function getModuleResource(): ModuleResource
    {
        return new ModuleResource($this->context);
    }

    /**
     * Installs user configuration.
     *
     * @param  ArrayObject|array  $data
     *
     * @throws Exception
     * @throws LocalizedException
     *
     * @return void
     */
    public function installUserConfig($data)
    {
        if ($this->isDryRun($data)) {
            return;
        }
        $userConfig = new StoreConfigurationDataMapper;

        /** @var \Magento\Framework\App\State $appState */
        $appState = $this->objectManagerProvider->get()->get(\Magento\Framework\App\State::class);
        $appState->setAreaCode(Area::AREA_GLOBAL);
        $configData = $userConfig->getConfigData($data);

        if (count($configData) === 0) {
            return;
        }

        /** @var Factory $configFactory */
        $configFactory = $this->objectManagerProvider->get()->create(Factory::class);

        foreach ($configData as $key => $val) {
            $configModel = $configFactory->create();
            $configModel->setDataByPath($key, $val);
            $configModel->save();
        }
    }

    /**
     * Configure search engine on install.
     *
     * @param  ArrayObject|array  $data
     *
     * @throws ValidationException
     * @throws Exception
     *
     * @return void
     */
    public function installSearchConfiguration($data)
    {
        /** @var SearchConfig $searchConfig */
        $searchConfig = $this->objectManagerProvider->get()->get(SearchConfig::class);
        $searchConfig->saveConfiguration($data);
    }

    /**
     * Validate remote storage on install.  Since it is a deployment-based configuration, the config is already present,
     * but this function confirms it can connect after Object Manager
     * has all necessary dependencies loaded to do so.
     *
     *
     * @throws ValidationException
     * @throws Exception
     */
    public function validateRemoteStorageConfiguration(array $data)
    {
        try {
            $remoteStorageValidator = $this->objectManagerProvider->get()->get(RemoteStorageValidator::class);
        } catch (ReflectionException $e) { // RemoteStorage module is not available; return early
            return;
        }

        $validationErrors = $remoteStorageValidator->validate($data, $this->deploymentConfig);

        if (! empty($validationErrors)) {
            $this->revertRemoteStorageConfiguration();

            throw new ValidationException(__(implode(PHP_EOL, $validationErrors)));
        }
    }

    /**
     * Create admin account.
     *
     * @param  ArrayObject|array  $data
     *
     * @throws Exception
     * @throws FileSystemException
     * @throws RuntimeException
     *
     * @return void
     */
    public function installAdminUser($data)
    {
        if ($this->isDryRun($data)) {
            return;
        }

        $adminUserModuleIsInstalled = (bool)$this->deploymentConfig->get('modules/Magento_User');

        //Admin user data is not system data, so we need to install it only if schema for admin user was installed
        if ($adminUserModuleIsInstalled) {
            $this->assertDbConfigExists();
            $data += ['db-prefix' => $this->deploymentConfig->get(ConfigOptionsListConstants::CONFIG_PATH_DB_PREFIX)];
            $setup = $this->setupFactory->create($this->context->getResources());
            $adminAccount = $this->adminAccountFactory->create($setup->getConnection(), (array)$data);
            $adminAccount->save();
        }
    }

    /**
     * Updates modules in deployment configuration.
     *
     * @param  bool  $keepGeneratedFiles  Cleanup generated classes and view files and reset ObjectManager
     *
     * @throws Exception
     *
     * @return void
     */
    public function updateModulesSequence($keepGeneratedFiles = false)
    {
        $config = $this->deploymentConfig->get(ConfigOptionsListConstants::KEY_MODULES);

        if (! $config) {
            // phpcs:ignore Magento2.Exceptions.DirectThrow
            throw Exception::make(
                "Can't run this operation: deployment configuration is absent."
                . " Run 'magento setup:config:set --help' for options.",
            );
        }
        $this->flushCaches([ConfigCache::TYPE_IDENTIFIER]);
        $this->cleanCaches();

        if (! $keepGeneratedFiles) {
            $this->cleanupGeneratedFiles();
        }
        $this->log->log('Updating modules:');
        $this->createModulesConfig([]);
    }

    /**
     * Get the modules config as Magento sees it.
     *
     * @throws LogicException
     *
     * @return array
     */
    public function getModulesConfig()
    {
        return $this->createModulesConfig([], true);
    }

    /**
     * Uninstall Magento application.
     *
     * @return void
     */
    public function uninstall()
    {
        $this->log->log('Starting Magento uninstallation:');

        try {
            $this->cleanCaches();
        } catch (\Exception $e) {
            $this->log->log(
                'Can\'t clear cache due to the following error: '
                . $e->getMessage() . PHP_EOL
                . 'To fully clean up your uninstallation, you must manually clear your cache.',
            );
        }

        $this->cleanupDb();

        $this->log->log('File system cleanup:');
        $messages = $this->cleanupFiles->clearAllFiles();

        foreach ($messages as $message) {
            $this->log->log($message);
        }

        $this->deleteDeploymentConfig();

        $this->log->logSuccess('Magento uninstallation complete.');
    }

    /**
     * Return messages.
     *
     * @return array
     */
    public function getInstallInfo()
    {
        return $this->installInfo;
    }

    /**
     * Deletes the database and creates it again.
     *
     * @return void
     */
    public function cleanupDb()
    {
        $cleanedUpDatabases = [];
        $connections = $this->deploymentConfig->get(ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTIONS, []);

        //Do database cleanup for all shards
        foreach ($connections as $config) {
            try {
                $connection = $this->connectionFactory->create($config);

                if (! $connection) {
                    $this->log->log("Can't create connection to database - skipping database cleanup");
                }
            } catch (\Exception $e) {
                $this->log->log($e->getMessage() . ' - skipping database cleanup');

                return;
            }

            $dbName = $connection->quoteIdentifier($config[ConfigOptionsListConstants::KEY_NAME]);

            //If for different shards one database was specified - no need to clean it few times
            if (! in_array($dbName, $cleanedUpDatabases)) {
                $this->log->log("Cleaning up database {$dbName}");
                // phpcs:ignore Magento2.SQL.RawQuery
                $connection->query("DROP DATABASE IF EXISTS {$dbName}");
                // phpcs:ignore Magento2.SQL.RawQuery
                $connection->query("CREATE DATABASE IF NOT EXISTS {$dbName}");
                $cleanedUpDatabases[] = $dbName;
            }
        }

        if (empty($config)) {
            $this->log->log('No database connection defined - skipping database cleanup');
        }
    }

    /**
     * Remove unused triggers from db.
     *
     * @throws \Exception
     */
    public function removeUnusedTriggers(): void
    {
        $this->triggerCleaner->removeTriggers();
        $this->cleanCaches();
    }

    /**
     * Create data handler.
     *
     * @param  string  $className
     * @param  string  $interfaceName
     *
     * @throws Exception
     *
     * @return mixed|null
     */
    protected function createSchemaDataHandler($className, $interfaceName)
    {
        if (class_exists($className)) {
            if (! is_subclass_of($className, $interfaceName) && $className !== $interfaceName) {
                // phpcs:ignore Magento2.Exceptions.DirectThrow
                throw Exception::make($className . ' must implement \\' . $interfaceName);
            }

            return $this->objectManagerProvider->get()->create($className);
        }
    }

    /**
     * Get declaration installer. For upgrade process it must be created after deployment config update.
     *
     * @throws Exception
     *
     * @return DeclarationInstaller
     */
    private function getDeclarationInstaller()
    {
        if (! $this->declarationInstaller) {
            $this->declarationInstaller = $this->objectManagerProvider->get()->get(
                DeclarationInstaller::class,
            );
        }

        return $this->declarationInstaller;
    }

    /**
     * Writes installation date to the configuration.
     *
     * @throws FileSystemException
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) Called by install() via callback.
     */
    private function writeInstallationDate()
    {
        $dateData = new ConfigData(ConfigFilePool::APP_ENV);
        $dateData->set(ConfigOptionsListConstants::CONFIG_PATH_INSTALL_DATE, date('r'));
        $configData = [$dateData->getFileKey() => $dateData->getData()];
        $this->deploymentConfigWriter->saveConfig($configData);
    }

    /**
     * Create modules deployment configuration segment.
     *
     * @param  ArrayObject|array  $request
     * @param  bool  $dryRun
     *
     * @throws FileSystemException
     * @throws LocalizedException
     * @throws RuntimeException
     *
     * @return array
     */
    private function createModulesConfig($request, $dryRun = false)
    {
        // Load all available modules
        $allModules = array_keys($this->moduleLoader->load());

        // Load current modules configuration
        $deploymentConfig = $this->deploymentConfigReader->load();
        $currentModules =
        $deploymentConfig[ConfigOptionsListConstants::KEY_MODULES] ?? [];

        // Read list of modules to enable and disable
        $enable = $this->readListOfModules(
            $allModules,
            $request,
            InstallCommand::INPUT_KEY_ENABLE_MODULES,
        );
        $disable = $this->readListOfModules(
            $allModules,
            $request,
            InstallCommand::INPUT_KEY_DISABLE_MODULES,
        );

        // Process module status based on enable and disable lists
        $result = $this->processModuleStatus(
            $allModules,
            $currentModules,
            $enable,
            $disable,
        );

        // Sort modules, placing Maginium modules at the end
        $result = $this->sortModules($result);

        // Save modules configuration if not in dry run mode
        if (! $dryRun) {
            $this->saveModulesConfig($result);
        }

        return $result;
    }

    /**
     * Determines list of modules from request based on list of all modules.
     *
     * @param  string[]  $all
     * @param  array  $request
     * @param  string  $key
     *
     * @throws LogicException
     *
     * @return array
     */
    private function readListOfModules($all, $request, $key)
    {
        $result = [];

        if (! empty($request[$key])) {
            if ($request[$key] === 'all') {
                $result = $all;
            } else {
                $result = explode(',', $request[$key]);

                foreach ($result as $module) {
                    if (! in_array($module, $all)) {
                        throw LogicException::make("Unknown module in the requested list: '{$module}'");
                    }
                }
            }
        }

        return $result;
    }

    /**
     * Logs progress.
     *
     * @return void
     */
    private function logProgress()
    {
        if (! $this->progress) {
            return;
        }
        $this->progress->setNext();
        $this->log->logMeta(
            sprintf(self::PROGRESS_LOG_RENDER, $this->progress->getCurrent(), $this->progress->getTotal()),
        );
    }

    /**
     * Set up setup_module table to register modules' versions, skip this process if it already exists.
     *
     *
     * @throws Zend_Db_Exception
     *
     * @return void
     */
    private function setupModuleRegistry(SchemaSetupInterface $setup)
    {
        $connection = $setup->getConnection();

        if (! $connection->isTableExists($setup->getTable('setup_module'))) {
            /**
             * Create table 'setup_module'.
             */
            $table = $connection->newTable($setup->getTable('setup_module'))
                ->addColumn(
                    'module',
                    Table::TYPE_TEXT,
                    50,
                    ['nullable' => false, 'primary' => true],
                    'Module',
                )->addColumn(
                    'schema_version',
                    Table::TYPE_TEXT,
                    50,
                    [],
                    'Schema Version',
                )->addColumn(
                    'data_version',
                    Table::TYPE_TEXT,
                    50,
                    [],
                    'Data Version',
                )->setComment('Module versions registry');
            $connection->createTable($table);
        }
    }

    /**
     * Set up core tables.
     *
     *
     * @return void
     */
    private function setupCoreTables(SchemaSetupInterface $setup)
    {
        // @var $connection AdapterInterface
        $connection = $setup->getConnection();
        $setup->startSetup();

        $this->setupSessionTable($setup, $connection);
        $this->setupCacheTable($setup, $connection);
        $this->setupCacheTagTable($setup, $connection);
        $this->setupFlagTable($setup, $connection);

        $setup->endSetup();
    }

    /**
     * Create table 'session'.
     *
     *
     * @return void
     */
    private function setupSessionTable(
        SchemaSetupInterface $setup,
        AdapterInterface $connection,
    ) {
        if (! $connection->isTableExists($setup->getTable('session'))) {
            $table = $connection->newTable(
                $setup->getTable('session'),
            )->addColumn(
                'session_id',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false, 'primary' => true],
                'Session Id',
            )->addColumn(
                'session_expires',
                Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Date of Session Expiration',
            )->addColumn(
                'session_data',
                Table::TYPE_BLOB,
                '2M',
                ['nullable' => false],
                'Session Data',
            )->setComment(
                'Database Sessions Storage',
            );
            $connection->createTable($table);
        }
    }

    /**
     * Create table 'cache'.
     *
     *
     * @throws Zend_Db_Exception
     *
     * @return void
     */
    private function setupCacheTable(
        SchemaSetupInterface $setup,
        AdapterInterface $connection,
    ) {
        if (! $connection->isTableExists($setup->getTable('cache'))) {
            $table = $connection->newTable(
                $setup->getTable('cache'),
            )->addColumn(
                'id',
                Table::TYPE_TEXT,
                200,
                ['nullable' => false, 'primary' => true],
                'Cache Id',
            )->addColumn(
                'data',
                Table::TYPE_BLOB,
                '2M',
                [],
                'Cache Data',
            )->addColumn(
                'create_time',
                Table::TYPE_INTEGER,
                null,
                [],
                'Cache Creation Time',
            )->addColumn(
                'update_time',
                Table::TYPE_INTEGER,
                null,
                [],
                'Time of Cache Updating',
            )->addColumn(
                'expire_time',
                Table::TYPE_INTEGER,
                null,
                [],
                'Cache Expiration Time',
            )->addIndex(
                $setup->getIdxName('cache', ['expire_time']),
                ['expire_time'],
            )->setComment(
                'Caches',
            );
            $connection->createTable($table);
        }
    }

    /**
     * Create table 'cache_tag'.
     *
     *
     * @throws Zend_Db_Exception
     *
     * @return void
     */
    private function setupCacheTagTable(
        SchemaSetupInterface $setup,
        AdapterInterface $connection,
    ) {
        if (! $connection->isTableExists($setup->getTable('cache_tag'))) {
            $table = $connection->newTable(
                $setup->getTable('cache_tag'),
            )->addColumn(
                'tag',
                Table::TYPE_TEXT,
                100,
                ['nullable' => false, 'primary' => true],
                'Tag',
            )->addColumn(
                'cache_id',
                Table::TYPE_TEXT,
                200,
                ['nullable' => false, 'primary' => true],
                'Cache Id',
            )->addIndex(
                $setup->getIdxName('cache_tag', ['cache_id']),
                ['cache_id'],
            )->setComment(
                'Tag Caches',
            );
            $connection->createTable($table);
        }
    }

    /**
     * Create table 'flag'.
     *
     *
     * @throws Zend_Db_Exception
     *
     * @return void
     */
    private function setupFlagTable(
        SchemaSetupInterface $setup,
        AdapterInterface $connection,
    ) {
        $tableName = $setup->getTable('flag');

        if (! $connection->isTableExists($tableName)) {
            $table = $connection->newTable(
                $tableName,
            )->addColumn(
                'flag_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Flag Id',
            )->addColumn(
                'flag_code',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Flag Code',
            )->addColumn(
                'state',
                Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'Flag State',
            )->addColumn(
                'flag_data',
                Table::TYPE_TEXT,
                '16m',
                [],
                'Flag Data',
            )->addColumn(
                'last_update',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                'Date of Last Flag Update',
            )->addIndex(
                $setup->getIdxName('flag', ['last_update']),
                ['last_update'],
            )->setComment(
                'Flag',
            );
            $connection->createTable($table);
        } else {
            $this->updateColumnType($connection, $tableName, 'flag_data', 'mediumtext');
        }
    }

    /**
     * Clear memory tables.
     *
     * Memory tables that used in old versions of Magento for indexing purposes should be cleaned
     * Otherwise some supported DB solutions like Galeracluster may have replication error
     * when memory engine will be switched to InnoDb
     *
     *
     * @return void
     */
    private function cleanMemoryTables(SchemaSetupInterface $setup)
    {
        $connection = $setup->getConnection();
        $tables = $connection->getTables();

        foreach ($tables as $table) {
            $tableData = $connection->showTableStatus($table);

            if (isset($tableData['Engine']) && $tableData['Engine'] === 'MEMORY') {
                $connection->truncateTable($table);
            }
        }
    }

    /**
     * Check whether all scripts will converted or not.
     *
     *
     * @return bool
     */
    private function convertationOfOldScriptsIsAllowed(array $request)
    {
        return isset($request[InstallCommand::CONVERT_OLD_SCRIPTS_KEY]) &&
            $request[InstallCommand::CONVERT_OLD_SCRIPTS_KEY];
    }

    /**
     * Throws exception with appropriate message if given not empty array of paths that requires writing permission.
     *
     * @param  array  $paths  List of not writable paths
     *
     * @throws \Exception If given not empty array of not writable paths
     *
     * @return void
     */
    private function throwExceptionForNotWritablePaths(array $paths)
    {
        if ($paths) {
            $errorMsg = 'Missing write permissions to the following paths:' . PHP_EOL . implode(PHP_EOL, $paths);

            // phpcs:ignore Magento2.Exceptions.DirectThrow
            throw Exception::make($errorMsg);
        }
    }

    /**
     * Handle database schema and data (install/upgrade/backup/uninstall etc).
     *
     * @param  SchemaSetupInterface|ModuleDataSetupInterface  $setup
     * @param  string  $type
     *
     * @throws \Magento\Framework\Setup\Exception
     * @throws Exception
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    private function handleDBSchemaData($setup, $type, array $request)
    {
        if ($type !== 'schema' && $type !== 'data') {
            // phpcs:ignore Magento2.Exceptions.DirectThrow
            throw Exception::make("Unsupported operation type {$type} is requested");
        }
        $resource = $this->getModuleResource();
        $verType = $type . '-version';
        $installType = $type . '-install';
        $upgradeType = $type . '-upgrade';
        $moduleNames = $this->moduleList->getNames();
        $moduleContextList = $this->generateListOfModuleContext($resource, $verType);

        /** @var Mysql $adapter */
        $adapter = $setup->getConnection();
        $schemaListener = $adapter->getSchemaListener();
        $this->patchApplierFactory = $this->objectManagerProvider->get()->create(
            PatchApplierFactory::class,
            [
                'objectManager' => $this->objectManagerProvider->get(),
            ],
        );

        $patchApplierParams = $type === 'schema' ?
            ['schemaSetup' => $setup] :
            ['moduleDataSetup' => $setup, 'objectManager' => $this->objectManagerProvider->get()];

        /** @var PatchApplier $patchApplier */
        $patchApplier = $this->patchApplierFactory->create($patchApplierParams);

        foreach ($moduleNames as $moduleName) {
            if ($this->isDryRun($request)) {
                $this->log->log("Module '{$moduleName}':");
                $this->logProgress();

                continue;
            }
            $schemaListener->setModuleName($moduleName);
            $this->log->log("Module '{$moduleName}':");
            $configVer = $this->moduleList->getOne($moduleName)['setup_version'];
            $currentVersion = $moduleContextList[$moduleName]->getVersion();

            // Schema/Data is installed
            if ($configVer !== null && $currentVersion !== '') {
                $status = version_compare($configVer, $currentVersion);

                if ($status === ModuleDataSetupInterface::VERSION_COMPARE_GREATER) {
                    $upgrader = $this->getSchemaDataHandler($moduleName, $upgradeType);

                    if ($upgrader) {
                        $this->log->logInline("Upgrading {$type}.. ");
                        $upgrader->upgrade($setup, $moduleContextList[$moduleName]);

                        if ($type === 'schema') {
                            $resource->setDbVersion($moduleName, $configVer);
                        } elseif ($type === 'data') {
                            $resource->setDataVersion($moduleName, $configVer);
                        }
                    }
                }
            } elseif ($configVer) {
                $installer = $this->getSchemaDataHandler($moduleName, $installType);

                if ($installer) {
                    $this->log->logInline("Installing {$type}... ");
                    $installer->install($setup, $moduleContextList[$moduleName]);
                }
                $upgrader = $this->getSchemaDataHandler($moduleName, $upgradeType);

                if ($upgrader) {
                    $this->log->logInline("Upgrading {$type}... ");
                    $upgrader->upgrade($setup, $moduleContextList[$moduleName]);
                }
            }

            if ($configVer) {
                if ($type === 'schema') {
                    $resource->setDbVersion($moduleName, $configVer);
                } elseif ($type === 'data') {
                    $resource->setDataVersion($moduleName, $configVer);
                }
            }

            // Applying data patches after old upgrade data scripts
            if ($type === 'schema') {
                $patchApplier->applySchemaPatch($moduleName);
            } elseif ($type === 'data') {
                $patchApplier->applyDataPatch($moduleName);
            }

            $this->logProgress();
        }

        if ($type === 'schema') {
            $this->log->log('Schema post-updates:');
        } elseif ($type === 'data') {
            $this->log->log('Data post-updates:');
        }
        $handlerType = $type === 'schema' ? 'schema-recurring' : 'data-recurring';

        foreach ($moduleNames as $moduleName) {
            if ($this->isDryRun($request)) {
                $this->log->log("Module '{$moduleName}':");
                $this->logProgress();

                continue;
            }
            $this->log->log("Module '{$moduleName}':");
            $modulePostUpdater = $this->getSchemaDataHandler($moduleName, $handlerType);

            if ($modulePostUpdater) {
                $this->log->logInline('Running ' . str_replace('-', ' ', $handlerType) . '...');
                $modulePostUpdater->install($setup, $moduleContextList[$moduleName]);
            }
            $this->logProgress();
        }
    }

    /**
     * Assert DbConfigExists.
     *
     * @throws Exception
     * @throws FileSystemException
     * @throws RuntimeException
     *
     * @return void
     */
    private function assertDbConfigExists()
    {
        $config = $this->deploymentConfig->get(ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT);

        if (! $config) {
            // phpcs:ignore Magento2.Exceptions.DirectThrow
            throw Exception::make(
                "Can't run this operation: configuration for DB connection is absent.",
            );
        }
    }

    /**
     * Check whether Magento setup is run in dry-run mode.
     *
     *
     * @return bool
     */
    private function isDryRun(array $request)
    {
        return isset($request[DryRunLogger::INPUT_KEY_DRY_RUN_MODE]) &&
            $request[DryRunLogger::INPUT_KEY_DRY_RUN_MODE];
    }

    /**
     * Create store order increment prefix configuration.
     *
     * @param  string  $orderIncrementPrefix  Value to use for order increment prefix
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) Called by install() via callback.
     */
    private function installOrderIncrementPrefix($orderIncrementPrefix)
    {
        $setup = $this->setupFactory->create($this->context->getResources());
        $dbConnection = $setup->getConnection();

        // get entity_type_id for order
        $select = $dbConnection->select()
            ->from($setup->getTable('eav_entity_type'), 'entity_type_id')
            ->where('entity_type_code = ?', self::ENTITY_TYPE_ORDER);
        $modelTypeId = $dbConnection->fetchOne($select);

        // See if row already exists
        $eavEntityStore = $dbConnection->select()
            ->from($setup->getTable('eav_entity_store'))
            ->where('entity_type_id = ?', $modelTypeId)
            ->where('store_id = ?', Store::DISTRO_STORE_ID);
        $incrementRow = $dbConnection->fetchRow($eavEntityStore);

        if (! empty($incrementRow)) {
            // row exists, update it
            $modelStoreId = $incrementRow['model_store_id'];
            $dbConnection->update(
                $setup->getTable('eav_entity_store'),
                ['increment_prefix' => $orderIncrementPrefix],
                ['model_store_id' => $modelStoreId],
            );
        } else {
            // add a row to the store's eav table, setting the increment_prefix
            $rowData = [
                'entity_type_id' => $modelTypeId,
                'store_id' => Store::DISTRO_STORE_ID,
                'increment_prefix' => $orderIncrementPrefix,
            ];
            $dbConnection->insert($setup->getTable('eav_entity_store'), $rowData);
        }

        // Get meta id for adding in profile table for order prefix
        $selectMeta = $dbConnection->select()
            ->from($setup->getTable('sales_sequence_meta'), 'meta_id')
            ->where('entity_type = ?', self::ENTITY_TYPE_ORDER)
            ->where('store_id = ?', Store::DISTRO_STORE_ID);
        $metaId = $dbConnection->fetchOne($selectMeta);

        // See if row already exists
        $profile = $dbConnection->select()
            ->from($setup->getTable('sales_sequence_profile'))
            ->where('meta_id = ?', $metaId);
        $incrementRow = $dbConnection->fetchRow($profile);

        if (! empty($incrementRow)) {
            // Row exists, update it
            $dbConnection->update(
                $setup->getTable('sales_sequence_profile'),
                ['prefix' => $orderIncrementPrefix, 'is_active' => '1'],
                'profile_id = ' . $incrementRow['profile_id'],
            );
        }
    }

    /**
     * Enable caches for after installing application.
     *
     * Note this is called by install() via callback.
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
     *
     * @throws Exception
     *
     * @return void
     */
    private function enableCaches()
    {
        /** @var Manager $cacheManager */
        $cacheManager = $this->objectManagerProvider->get()->create(Manager::class);

        $types = $cacheManager->getAvailableTypes();
        $enabledTypes = $cacheManager->setEnabled($types, true);
        $cacheManager->clean($enabledTypes);

        $this->log->log('Current status:');

        foreach ($cacheManager->getStatus() as $cache => $status) {
            $this->log->log(sprintf('%s: %d', $cache, $status));
        }
    }

    /**
     * Clean caches after installing application.
     *
     * @throws Exception
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) Called by install() via callback.
     */
    private function cleanCaches()
    {
        /** @var Manager $cacheManager */
        $cacheManager = $this->objectManagerProvider->get()->get(Manager::class);
        $types = $cacheManager->getAvailableTypes();
        $cacheManager->clean($types);
        $this->log->log('Cache cleared successfully');
    }

    /**
     * Flush caches for specific types or all available types.
     *
     * @param  array  $types
     *
     * @throws Exception
     *
     * @return void
     */
    private function flushCaches($types = [])
    {
        /** @var Manager $cacheManager */
        $cacheManager = $this->objectManagerProvider->get()->get(Manager::class);
        $types = empty($types) ? $cacheManager->getAvailableTypes() : $types;
        $cacheManager->flush($types);
        $this->log->log('Cache types ' . implode(',', $types) . ' flushed successfully');
    }

    /**
     * Enables or disables maintenance mode for Magento application.
     *
     * @param  int  $value
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) Called by install() via callback.
     */
    private function setMaintenanceMode($value)
    {
        $this->maintenanceMode->set($value);
    }

    /**
     * Removes deployment configuration.
     *
     * @throws FileSystemException
     *
     * @return void
     */
    private function deleteDeploymentConfig()
    {
        $configDir = $this->filesystem->getDirectoryWrite(DirectoryList::CONFIG);
        $configFiles = $this->deploymentConfigReader->getFiles();

        foreach ($configFiles as $configFile) {
            $absolutePath = $configDir->getAbsolutePath($configFile);

            if (! $configDir->isFile($configFile)) {
                $this->log->log("The file '{$absolutePath}' doesn't exist - skipping cleanup");

                continue;
            }

            try {
                $this->log->log($absolutePath);
                $configDir->delete($configFile);
            } catch (FileSystemException $e) {
                $this->log->log($e->getMessage());
            }
        }
    }

    /**
     * Validates that MySQL is accessible and MySQL version is supported.
     *
     * @throws Exception
     * @throws FileSystemException
     * @throws RuntimeException
     *
     * @return void
     */
    private function assertDbAccessible()
    {
        $driverOptionKeys = [
            ConfigOptionsListConstants::KEY_MYSQL_SSL_KEY => ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT_DRIVER_OPTIONS . '/' .
                ConfigOptionsListConstants::KEY_MYSQL_SSL_KEY,

            ConfigOptionsListConstants::KEY_MYSQL_SSL_CERT => ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT_DRIVER_OPTIONS . '/' .
                ConfigOptionsListConstants::KEY_MYSQL_SSL_CERT,

            ConfigOptionsListConstants::KEY_MYSQL_SSL_CA => ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT_DRIVER_OPTIONS . '/' .
                ConfigOptionsListConstants::KEY_MYSQL_SSL_CA,

            ConfigOptionsListConstants::KEY_MYSQL_SSL_VERIFY => ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT_DRIVER_OPTIONS . '/' .
                ConfigOptionsListConstants::KEY_MYSQL_SSL_VERIFY,
        ];
        $driverOptions = [];

        foreach ($driverOptionKeys as $driverOptionKey => $driverOptionConfig) {
            $config = $this->deploymentConfig->get($driverOptionConfig);

            if ($config !== null) {
                $driverOptions[$driverOptionKey] = $config;
            }
        }

        $this->dbValidator->checkDatabaseConnectionWithDriverOptions(
            $this->deploymentConfig->get(
                ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT .
                '/' . ConfigOptionsListConstants::KEY_NAME,
            ),
            $this->deploymentConfig->get(
                ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT .
                '/' . ConfigOptionsListConstants::KEY_HOST,
            ),
            $this->deploymentConfig->get(
                ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT .
                '/' . ConfigOptionsListConstants::KEY_USER,
            ),
            $this->deploymentConfig->get(
                ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT .
                '/' . ConfigOptionsListConstants::KEY_PASSWORD,
            ),
            $driverOptions,
        );
        $prefix = $this->deploymentConfig->get(
            ConfigOptionsListConstants::CONFIG_PATH_DB_CONNECTION_DEFAULT .
            '/' . ConfigOptionsListConstants::KEY_PREFIX,
        );

        if ($prefix !== null) {
            $this->dbValidator->checkDatabaseTablePrefix($prefix);
        }
    }

    /**
     * Get handler for schema or data install/upgrade/backup/uninstall etc.
     *
     * @param  string  $moduleName
     * @param  string  $type
     *
     * @throws Exception
     *
     * @return InstallSchemaInterface | UpgradeSchemaInterface | InstallDataInterface | UpgradeDataInterface | null
     */
    private function getSchemaDataHandler($moduleName, $type)
    {
        $className = str_replace('_', '\\', $moduleName) . '\Setup';

        switch ($type) {
            case 'schema-install':
                $className .= '\InstallSchema';
                $interface = self::SCHEMA_INSTALL;

                break;

            case 'schema-upgrade':
                $className .= '\UpgradeSchema';
                $interface = self::SCHEMA_UPGRADE;

                break;

            case 'schema-recurring':
                $className .= '\Recurring';
                $interface = self::SCHEMA_INSTALL;

                break;

            case 'data-install':
                $className .= '\InstallData';
                $interface = self::DATA_INSTALL;

                break;

            case 'data-upgrade':
                $className .= '\UpgradeData';
                $interface = self::DATA_UPGRADE;

                break;

            case 'data-recurring':
                $className .= '\RecurringData';
                $interface = self::DATA_INSTALL;

                break;

            default:
                // phpcs:ignore Magento2.Exceptions.DirectThrow
                throw Exception::make("{$className} does not exist");
        }

        return $this->createSchemaDataHandler($className, $interface);
    }

    /**
     * Generates list of ModuleContext.
     *
     * @param  ModuleResource  $resource
     * @param  string  $type
     *
     * @throws Exception
     *
     * @return ModuleContext[]
     */
    private function generateListOfModuleContext($resource, $type)
    {
        $moduleContextList = [];

        foreach ($this->moduleList->getNames() as $moduleName) {
            if ($type === 'schema-version') {
                $dbVer = $resource->getDbVersion($moduleName);
            } elseif ($type === 'data-version') {
                $dbVer = $resource->getDataVersion($moduleName);
            } else {
                // phpcs:ignore Magento2.Exceptions.DirectThrow
                throw Exception::make("Unsupported version type {$type} is requested");
            }

            if ($dbVer !== false) {
                $moduleContextList[$moduleName] = new ModuleContext($dbVer);
            } else {
                $moduleContextList[$moduleName] = new ModuleContext('');
            }
        }

        return $moduleContextList;
    }

    /**
     * Clear generated/code and reset object manager.
     *
     * @return void
     */
    private function cleanupGeneratedFiles()
    {
        $this->log->log('File system cleanup:');
        $messages = $this->cleanupFiles->clearCodeGeneratedFiles();

        // unload Magento autoloader because it may be using compiled definition
        foreach (spl_autoload_functions() as $autoloader) {
            if (is_array($autoloader) && $autoloader[0] instanceof Autoloader) {
                spl_autoload_unregister([$autoloader[0], $autoloader[1]]);

                break;
            }
        }

        // Corrected Magento autoloader will be loaded upon next get() call on $this->objectManagerProvider
        $this->objectManagerProvider->reset();

        foreach ($messages as $message) {
            $this->log->log($message);
        }
    }

    /**
     * Checks that admin data is not empty in request array.
     *
     * @param  ArrayObject|array  $request
     *
     * @return bool
     */
    private function isAdminDataSet($request)
    {
        $adminData = array_filter(
            $request,
            fn($value, $key) => in_array(
                $key,
                [
                    AdminAccount::KEY_EMAIL,
                    AdminAccount::KEY_FIRST_NAME,
                    AdminAccount::KEY_LAST_NAME,
                    AdminAccount::KEY_USER,
                    AdminAccount::KEY_PASSWORD,
                ],
            ) && $value !== null,
            ARRAY_FILTER_USE_BOTH,
        );

        return ! empty($adminData);
    }

    /**
     * Update flag_data column data type to maintain consistency.
     */
    private function updateColumnType(
        AdapterInterface $connection,
        string $tableName,
        string $columnName,
        string $typeName,
    ): void {
        $tableDescription = $connection->describeTable($tableName);

        if ($tableDescription[$columnName]['DATA_TYPE'] !== $typeName) {
            $connection->modifyColumn(
                $tableName,
                $columnName,
                $typeName,
            );
        }
    }

    /**
     * Revert remote storage configuration back to local file driver.
     */
    private function revertRemoteStorageConfiguration()
    {
        if (! $this->deploymentConfigWriter->checkIfWritable()) {
            return;
        }

        $remoteStorageData = new ConfigData(ConfigFilePool::APP_ENV);
        $remoteStorageData->set('remote_storage', ['driver' => 'file']);
        $configData = [$remoteStorageData->getFileKey() => $remoteStorageData->getData()];
        $this->deploymentConfigWriter->saveConfig($configData, true);
    }

    /**
     * Set Index mode as 'Update by Schedule'.
     *
     * @throws LocalizedException
     * @throws \Exception
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod) Called by install() via callback.
     */
    private function setIndexerModeSchedule(): void
    {
        /** @var Collection $indexCollection */
        $indexCollection = $this->objectManagerProvider->get()->get(Collection::class);
        $indexerIds = $indexCollection->getAllIds();

        try {
            foreach ($indexerIds as $indexerId) {
                /** @var IndexerInterface $model */
                $model = $this->objectManagerProvider->get()->get(IndexerRegistry::class)
                    ->get($indexerId);
                $model->setScheduled(true);
            }
            $this->log->log(__('%1 indexer(s) are in "Update by Schedule" mode.', count($indexerIds)));
        } catch (LocalizedException $e) {
            $this->log->log($e->getMessage());
        } catch (\Exception $e) {
            $this->log->log(__("We couldn't change indexer(s)' mode because of an error: " . $e->getMessage()));
        }
    }

    /**
     * Separate Maginium modules from other modules.
     *
     * @param  array  $modules  The modules to sort.
     *
     * @return array The sorted modules.
     */
    private function sortModules(array $modules): array
    {
        $coreModules = [];
        $targetedModules = [];

        // Separate Maginium modules from other modules
        foreach ($modules as $moduleKey => $moduleStatus) {
            if (! str_contains($moduleKey, self::TARGETED_MODULES_NAMESPACE)) {
                $coreModules[$moduleKey] = $moduleStatus;
            } else {
                $targetedModules[$moduleKey] = $moduleStatus;
            }
        }

        // Merge other modules and Maginium modules
        return array_merge($coreModules, $targetedModules);
    }

    /**
     * Process module status based on enable and disable lists.
     *
     * @param  array  $allModules  List of all modules.
     * @param  array  $currentModules  Current modules configuration.
     * @param  array  $enable  List of modules to enable.
     * @param  array  $disable  List of modules to disable.
     *
     * @return array The updated module status.
     */
    private function processModuleStatus(
        array $allModules,
        array $currentModules,
        array $enable,
        array $disable,
    ): array {
        $result = [];

        // Process each module
        foreach ($allModules as $module) {
            // Set module status based on current configuration
            $moduleStatus =
            isset($currentModules[$module]) && ! $currentModules[$module]
            ? 0
            : 1;

            // Disable module if in disable list
            if (in_array($module, $disable)) {
                $moduleStatus = 0;
            }

            // Enable module if in enable list
            if (in_array($module, $enable)) {
                $moduleStatus = 1;
            }
            $result[$module] = $moduleStatus;
        }

        return $result;
    }

    /**
     * Save modules configuration.
     *
     * @param  array  $modules  The modules configuration to save.
     */
    private function saveModulesConfig(array $modules): void
    {
        // Save modules configuration
        $this->deploymentConfigWriter->saveConfig(
            [ConfigFilePool::APP_CONFIG => ['modules' => $modules]],
            true,
        );
    }
}
