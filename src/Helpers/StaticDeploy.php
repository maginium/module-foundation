<?php

declare(strict_types=1);

namespace Maginium\Foundation\Helpers;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Filesystem\Directory\Read;
use Magento\Framework\Filesystem\Directory\Write;
use Maginium\Framework\Support\Arr;
use Maginium\Framework\Support\Facades\Filesystem;
use Maginium\Framework\Support\Path;
use Maginium\Framework\Support\Str;

/**
 * Class StaticDeploy.
 *
 * This class serves as a helper for deploying files and folders
 * within the Magento filesystem. It provides methods for copying
 * files and creating directories with appropriate permissions.
 */
class StaticDeploy
{
    /**
     * Default file permissions for newly created files.
     *
     * @var int
     */
    public const DEFAULT_FILE_PERMISSIONS = 0666;

    /**
     * Default directory permissions for newly created directories.
     *
     * @var int
     */
    public const DEFAULT_DIR_PERMISSIONS = 0777;

    /**
     * @var Write The write directory instance for the root directory.
     */
    protected $rootWrite;

    /**
     * @var Read The read directory instance for the root directory.
     */
    protected $rootRead;

    /**
     * StaticDeploy constructor.
     *
     * Initializes the read and write directory instances for the root
     * Magento filesystem. This is required for moving and accessing
     * files and directories.
     */
    public function __construct()
    {
        // Initialize the read and write directory instances for the root directory.
        $this->rootRead = Filesystem::getDirectoryRead(DirectoryList::ROOT);
        $this->rootWrite = Filesystem::getDirectoryWrite(DirectoryList::ROOT);
    }

    /**
     * Deploy the specified folder and its contents.
     *
     * This method takes a folder path relative to the root and
     * initiates the process to move all files and directories from
     * that folder to the root of the Magento filesystem.
     *
     * @param  string  $folder  The folder to deploy (relative to root).
     */
    public function deployFolder(string $folder): void
    {
        // Get the relative path of the folder to deploy.
        $from = $this->rootRead->getRelativePath($folder);

        // Move all files and directories from the specified folder to the root.
        $this->moveFiles($from, '');
    }

    /**
     * Move files from one location to another within the Magento filesystem.
     *
     * This method recursively copies files and directories from the
     * source path to the destination path, ensuring that all contents
     * are transferred with the appropriate permissions set.
     *
     * @param  string  $fromPath  Source path from where files are moved.
     * @param  string  $toPath  Destination path where files are moved to.
     */
    public function moveFiles(string $fromPath, string $toPath): void
    {
        // Get the base name of the source path for creating new file paths.
        $baseName = Filesystem::basename($fromPath);

        // Read all files and directories recursively from the source path.
        $files = $this->rootRead->readRecursively($fromPath);

        // Include the source path in the array to ensure the directory is created.
        Arr::unshift($files, $fromPath);

        // Iterate through each file/directory to move them to the new location.
        foreach ($files as $file) {
            // Determine the new file path based on the source and destination paths.
            $newFileName = $this->getNewFilePath($file, $fromPath, $toPath, $baseName);

            // Skip this file if it already exists at the new location.
            if ($this->rootRead->isExist($newFileName)) {
                // Skip to the next file if it already exists.
                continue;
            }

            // Copy the file or create the directory at the new location.
            $this->copyOrCreate($file, $newFileName);
        }
    }

    /**
     * Construct a new file path by replacing the source path with the destination path.
     *
     * This method modifies a given file path by substituting the source path with
     * the destination path, incorporating the specified base name in the process.
     *
     * @param  string  $originalFilePath  The original file path to be transformed.
     * @param  string  $sourcePath  The path segment to be replaced.
     * @param  string  $destinationPath  The path segment to replace with.
     * @param  string  $baseName  The base name to append to the destination path.
     *
     * @return string The transformed file path with the source path replaced.
     */
    protected function getNewFilePath(
        string $originalFilePath,
        string $sourcePath,
        string $destinationPath,
        string $baseName,
    ): string {
        // Combine destination path and base name, ensuring no leading separators.
        $adjustedDestinationPath = Str::ltrim(
            Path::join($destinationPath, $baseName),
            SP,
        );

        // Replace the source path in the original file path with the adjusted destination path.
        return Str::replace($sourcePath, $adjustedDestinationPath, $originalFilePath);
    }

    /**
     * Copy a file or create a directory at the new location.
     *
     * This method checks whether the item is a file or a directory,
     * then performs the appropriate action (copying or creating)
     * and sets the permissions accordingly.
     *
     * @param  string  $sourcePath  The source file or directory path.
     * @param  string  $destinationPath  The destination file or directory path.
     */
    protected function copyOrCreate(string $sourcePath, string $destinationPath): void
    {
        // Check if the current item is a file.
        if ($this->rootRead->isFile($sourcePath)) {
            // Copy the file to the new location.
            $this->rootWrite->copyFile($sourcePath, $destinationPath);

            // Set the permissions for the newly copied file.
            $this->rootWrite->changePermissions($destinationPath, self::DEFAULT_FILE_PERMISSIONS);
        }
        // Check if the current item is a directory.
        elseif ($this->rootRead->isDirectory($sourcePath)) {
            // Create the directory at the new location.
            $this->rootWrite->create($destinationPath);

            // Set the permissions for the newly created directory.
            $this->rootWrite->changePermissions($destinationPath, self::DEFAULT_DIR_PERMISSIONS);
        }
    }
}
