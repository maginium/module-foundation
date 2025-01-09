<?php

declare(strict_types=1);

namespace Maginium\Foundation\Models;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\File\Name;
use Magento\Framework\Filesystem;
use Magento\Framework\Filesystem\Directory\WriteInterface;
use Magento\Framework\UrlInterface;
use Magento\MediaStorage\Helper\File\Storage\Database;
use Magento\MediaStorage\Model\File\Uploader;
use Magento\MediaStorage\Model\File\UploaderFactory;
use Maginium\Foundation\Exceptions\Exception;
use Maginium\Framework\Support\Facades\Log;
use Maginium\Framework\Support\Facades\StoreManager;
use Maginium\Store\Models\Store;

/**
 * Class ImageUploader.
 *
 * This class handles image uploads, file validations, and management of file operations.
 */
class ImageUploader
{
    /**
     * @var WriteInterface Handles media directory operations.
     */
    private WriteInterface $mediaDirectory;

    /**
     * @var Database Facilitates interactions with the core file storage.
     */
    private Database $coreFileStorageDatabase;

    /**
     * @var UploaderFactory Factory for creating file uploader instances.
     */
    private UploaderFactory $uploaderFactory;

    /**
     * @var Name Utility for generating new file names.
     */
    private Name $fileNameLookup;

    /**
     * @var string Temporary path for uploaded files.
     */
    private string $baseTmpPath;

    /**
     * @var string Final storage path for files.
     */
    private string $basePath;

    /**
     * @var array List of allowed file extensions.
     */
    private array $allowedExtensions;

    /**
     * @var array List of allowed MIME types.
     */
    private array $allowedMimeTypes;

    /**
     * ImageUploader constructor.
     *
     * @param  Name  $fileNameLookup  Utility for file naming.
     * @param  Filesystem  $filesystem  Filesystem manager.
     * @param  UploaderFactory  $uploaderFactory  Factory for creating uploader instances.
     * @param  Database  $coreFileStorageDatabase  Core database for file storage.
     * @param  string  $basePath  Final destination path for files.
     * @param  string  $baseTmpPath  Temporary storage path for files.
     * @param  array  $allowedMimeTypes  List of allowed MIME types.
     * @param  array  $allowedExtensions  List of allowed file extensions.
     */
    public function __construct(
        Name $fileNameLookup,
        Filesystem $filesystem,
        UploaderFactory $uploaderFactory,
        Database $coreFileStorageDatabase,
        string $basePath,
        string $baseTmpPath,
        array $allowedMimeTypes = [],
        array $allowedExtensions = [],
    ) {
        $this->fileNameLookup = $fileNameLookup;
        $this->uploaderFactory = $uploaderFactory;
        $this->coreFileStorageDatabase = $coreFileStorageDatabase;
        $this->basePath = $basePath;
        $this->baseTmpPath = $baseTmpPath;
        $this->allowedMimeTypes = $allowedMimeTypes;
        $this->allowedExtensions = $allowedExtensions;

        // Initialize media directory for writing operations.
        $this->mediaDirectory = $filesystem->getDirectoryWrite(DirectoryList::MEDIA);
    }

    /**
     * Set the base temporary path for file uploads.
     *
     * @param  string  $baseTmpPath  Temporary path for uploads.
     */
    public function setBaseTmpPath(string $baseTmpPath): void
    {
        $this->baseTmpPath = $baseTmpPath;
    }

    /**
     * Set the base storage path for files.
     *
     * @param  string  $basePath  Base path for file storage.
     */
    public function setBasePath(string $basePath): void
    {
        $this->basePath = $basePath;
    }

    /**
     * Set the list of allowed file extensions.
     *
     * @param  array  $allowedExtensions  Array of allowed file extensions.
     */
    public function setAllowedExtensions(array $allowedExtensions): void
    {
        $this->allowedExtensions = $allowedExtensions;
    }

    /**
     * Get the base temporary path for file uploads.
     */
    public function getBaseTmpPath(): string
    {
        return $this->baseTmpPath;
    }

    /**
     * Get the base storage path for files.
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * Get the list of allowed file extensions.
     */
    public function getAllowedExtensions(): array
    {
        return $this->allowedExtensions;
    }

    /**
     * Move a file from the temporary directory to the final destination.
     *
     * @param  string  $imageName  Name of the image file.
     * @param  bool  $returnRelativePath  Whether to return the relative path.
     *
     * @throws LocalizedException If file operation fails.
     *
     * @return string Final file path or image name.
     */
    public function moveFileFromTmp(string $imageName, bool $returnRelativePath = false): string
    {
        // Generate file paths for temporary and final storage.
        $baseTmpPath = $this->getBaseTmpPath();
        $basePath = $this->getBasePath();
        $baseImagePath = $this->getFilePath($basePath, $this->fileNameLookup->getNewFileName(
            $this->mediaDirectory->getAbsolutePath($this->getFilePath($basePath, $imageName)),
        ));
        $baseTmpImagePath = $this->getFilePath($baseTmpPath, $imageName);

        try {
            // Rename file in the database and media directory.
            $this->coreFileStorageDatabase->renameFile($baseTmpImagePath, $baseImagePath);
            $this->mediaDirectory->renameFile($baseTmpImagePath, $baseImagePath);
        } catch (Exception $e) {
            Log::critical($e); // Log critical errors.

            throw new LocalizedException(__('Something went wrong while saving the file(s).'), $e);
        }

        return $returnRelativePath ? $baseImagePath : $imageName;
    }

    /**
     * Save a file to the temporary directory.
     *
     * @param  string  $fileId  File input identifier.
     *
     * @throws LocalizedException If upload fails.
     *
     * @return array Resulting file metadata.
     */
    public function saveFileToTmpDir(string $fileId): array
    {
        $baseTmpPath = $this->getBaseTmpPath();

        try {
            // Create uploader instance and configure it.
            /** @var Uploader $uploader */
            $uploader = $this->uploaderFactory->create(['fileId' => $fileId]);
            $uploader->setAllowedExtensions($this->getAllowedExtensions());
            $uploader->setAllowRenameFiles(true);

            // Validate MIME type.
            if (! $uploader->checkMimeType($this->allowedMimeTypes)) {
                throw new LocalizedException(__('File validation failed.'));
            }

            // Save the file to the temporary directory.
            $result = $uploader->save($this->mediaDirectory->getAbsolutePath($baseTmpPath));

            if (! $result) {
                throw new LocalizedException(__('File cannot be saved to the destination folder.'));
            }

            // Sanitize and enhance the result with additional metadata.
            $result = $this->sanitizeResult($result, $baseTmpPath);

            // Save the file record to the database if available.
            if (isset($result['file'])) {
                $this->saveToDatabase($result['file']);
            }

            return $result;
        } catch (Exception $e) {
            Log::critical($e); // Log critical errors.

            throw new LocalizedException(__('File upload failed.'), $e);
        }
    }

    /**
     * Generate the full file path by combining the base path and file name.
     *
     * @param  string  $path  Base path.
     * @param  string  $imageName  Name of the image file.
     *
     * @return string Full file path.
     */
    private function getFilePath(string $path, string $imageName): string
    {
        return rtrim($path, '/') . '/' . ltrim($imageName, '/');
    }

    /**
     * Sanitize the upload result and generate additional metadata.
     *
     * @param  array  $result  Upload result data.
     * @param  string  $baseTmpPath  Temporary directory path.
     *
     * @return array Sanitized result data.
     */
    private function sanitizeResult(array $result, string $baseTmpPath): array
    {
        // Remove path information from the result.
        unset($result['path']);
        $result['tmp_name'] = str_replace('\\', '/', $result['tmp_name'] ?? '');

        // Retrieve the store instance and generate file URL.
        /** @var Store $store */
        $store = StoreManager::getStore();
        $result['url'] = $store->getBaseUrl(UrlInterface::URL_TYPE_MEDIA) . $this->getFilePath($baseTmpPath, $result['file']);
        $result['name'] = $result['file'];

        return $result;
    }

    /**
     * Save a file record to the database.
     *
     * @param  string  $file  File name.
     *
     * @throws LocalizedException If database operation fails.
     */
    private function saveToDatabase(string $file): void
    {
        try {
            // Construct relative file path and save it to the database.
            $relativePath = rtrim($this->getBaseTmpPath(), '/') . '/' . ltrim($file, '/');
            $this->coreFileStorageDatabase->saveFile($relativePath);
        } catch (Exception $e) {
            Log::critical($e); // Log critical errors.

            throw new LocalizedException(__('Something went wrong while saving the file(s).'), $e);
        }
    }
}
