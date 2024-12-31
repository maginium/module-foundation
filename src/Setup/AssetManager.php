<?php

declare(strict_types=1);

namespace Maginium\Foundation\Setup;

use Magento\Framework\App\Area;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\App\State;
use Magento\MediaGallerySynchronization\Model\GetAssetsIterator;
use Magento\MediaGallerySynchronizationApi\Api\SynchronizeFilesInterface;
use Maginium\Framework\Support\Facades\Container;
use Maginium\Framework\Support\Facades\Filesystem;
use Maginium\Framework\Support\Str;
use SplFileInfo;

/**
 * Class AssetManager.
 *
 * Manages the synchronization of media assets in the specified directory.
 */
class AssetManager
{
    /**
     * @var State The state of the Magento application.
     */
    protected State $state;

    /**
     * @var ProductMetadataInterface Provides metadata about the product.
     */
    protected ProductMetadataInterface $metadata;

    /**
     * @var array List of file extensions to be processed.
     */
    protected array $fileExtensions;

    /**
     * @var SynchronizeFilesInterface|null Interface for synchronizing media files.
     */
    protected ?SynchronizeFilesInterface $synchronizeFile = null;

    /**
     * @var GetAssetsIterator|null Iterator for retrieving assets from the media directory.
     */
    protected ?GetAssetsIterator $assetIterator = null;

    /**
     * AssetManager constructor.
     *
     * @param  State  $state  The state of the Magento application.
     * @param  ProductMetadataInterface  $metadata  Provides metadata about the product.
     * @param  array  $fileExtensions  List of file extensions to be processed.
     */
    public function __construct(
        State $state,
        ProductMetadataInterface $metadata,
        array $fileExtensions,
    ) {
        // Initialize application state.
        $this->state = $state;

        // Initialize product metadata.
        $this->metadata = $metadata;

        // Initialize file extensions.
        $this->fileExtensions = $fileExtensions;
    }

    /**
     * Synchronize media files.
     *
     * Processes media files in a specified directory, synchronizing them
     * if they meet the required conditions. This includes filtering based
     * on Magento version and excluding certain files (e.g., those containing "errors").
     *
     * @param  string  $directory  Directory path to scan for media files.
     * @param  string  $baseDir  Base directory for media files, defaults to MEDIA directory.
     */
    public function synchronizeMedia(string $directory, string $baseDir = DirectoryList::MEDIA): void
    {
        // Initialize necessary objects before synchronizing files
        $this->init();

        // Get the absolute path for the media assets directory
        $assetsPath = $this->getAssetsPath($directory, $baseDir);

        // Retrieve files that need to be processed for synchronization
        $filesToProcess = $this->getFilesToProcess($assetsPath, $baseDir);

        // Perform file synchronization if there are files to process
        if ($filesToProcess) {
            $this->performSynchronization($filesToProcess);
        }
    }

    /**
     * Get the absolute path for the media assets directory.
     *
     * @param  string  $directory  The relative directory path for media assets.
     * @param  string  $baseDir  The base directory for media files.
     *
     * @return string The absolute path for the media assets directory.
     */
    private function getAssetsPath(string $directory, string $baseDir): string
    {
        // Retrieve and return the absolute path for the specified directory
        return Filesystem::getDirectoryRead($baseDir)->getAbsolutePath($directory);
    }

    /**
     * Get files that need to be processed from the assets directory.
     *
     * Filters files based on specific criteria, such as excluding files
     * with "errors" in their relative paths and checking for compatibility
     * with the current Magento version.
     *
     * @param  string  $assetsPath  The absolute path to the assets directory.
     * @param  string  $baseDir  The base directory for media files.
     *
     * @throws FileSystemException
     *
     * @return array List of files to be processed, either as strings or SplFileInfo objects.
     */
    private function getFilesToProcess(string $assetsPath, string $baseDir): array
    {
        $filesToProcess = [];

        /** @var SplFileInfo $file */
        foreach ($this->assetIterator->execute($assetsPath) as $file) {
            $relativePath = Filesystem::getDirectoryRead($baseDir)->getRelativePath($file->getPathname());

            // Skip files with paths containing "errors"
            if (! Str::contains($relativePath, 'errors')) {
                // Convert SplFileInfo to a path string to be compatible with getAssetPath
                $filesToProcess[] = $relativePath;
            }
        }

        return $filesToProcess;
    }

    /**
     * Perform file synchronization.
     *
     * Executes the file synchronization process using the provided list of files.
     * This method is called within the context of the admin area to ensure
     * proper permissions and configurations are in place.
     *
     * @param  array  $filesToProcess  List of files to be synchronized.
     */
    private function performSynchronization(array $filesToProcess): void
    {
        // Emulate the area code for admin HTML to ensure proper context
        $this->state->emulateAreaCode(Area::AREA_ADMINHTML, function() use ($filesToProcess): void {
            // Execute the file synchronization process
            $this->synchronizeFile->execute($filesToProcess);
        });
    }

    /**
     * Initialize necessary objects for asset processing.
     *
     * Resolves dependencies for asset iteration and file synchronization.
     * This setup is necessary before media file processing can occur.
     */
    private function init(): void
    {
        // Resolve the asset iterator instance from the dependency injection container
        $this->assetIterator = Container::resolve(GetAssetsIterator::class);

        // Resolve the file synchronization interface from the dependency injection container
        $this->synchronizeFile = Container::resolve(SynchronizeFilesInterface::class);
    }
}
