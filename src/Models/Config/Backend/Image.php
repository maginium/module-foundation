<?php

declare(strict_types=1);

namespace Maginium\Foundation\Models\Config\Backend;

use Magento\Config\Model\Config\Backend\Image as BaseImage;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\LocalizedException;
use Maginium\Framework\Support\Path;

/**
 * Class Image
 * Handles the image configuration backend logic for the merchant subscription.
 */
class Image extends BaseImage
{
    /**
     * Directory where images will be uploaded.
     */
    public string $uploadDir = '';

    /**
     * Performs operations before saving the image data, including deletion of old files if necessary.
     *
     * @throws FileSystemException
     * @throws LocalizedException
     *
     * @return $this|void
     */
    public function beforeSave()
    {
        // Get current value (file data)
        $value = $this->getValue();

        // Get file data
        $file = $this->getFileData();

        // Check if delete flag is set
        $deleteFlag = is_array($value) && ! empty($value['delete']);

        // If no new file is uploaded
        if (empty($file)) {
            // If there's an old value and delete flag is set, delete the old image
            if ($this->getOldValue() && $deleteFlag) {
                $this->_deleteOldImage();
            }

            return parent::beforeSave();
        }

        // Temporary name of the uploaded file
        $fileTmpName = $file['tmp_name'];

        // If there's an old value and a new file or delete flag is set, delete the old image
        if ($this->getOldValue() && ($fileTmpName || $deleteFlag)) {
            $this->_deleteOldImage();
        }

        return parent::beforeSave();
    }

    /**
     * Retrieves the full upload directory path including scope information.
     *
     * @return string
     */
    protected function _getUploadDir()
    {
        // Get the absolute path of the upload directory, appending scope info
        return $this->_mediaDirectory->getAbsolutePath(
            $this->_appendScopeInfo(self::$uploadDir),
        );
    }

    /**
     * Specifies whether scope information should be added when handling the file.
     *
     * @return bool
     */
    protected function _addScopeInfo()
    {
        return true;
    }

    /**
     * Gets the list of allowed file extensions for uploaded images.
     *
     * @return array
     */
    protected function _getAllowedExtensions()
    {
        // Allowed image file extensions
        return ['jpg', 'jpeg', 'png', 'gif'];
    }

    /**
     * Deletes the old image from the media directory.
     */
    private function _deleteOldImage()
    {
        // Delete the old image from the specified upload directory
        $this->_mediaDirectory->delete(Path::join(self::$uploadDir, $this->getOldValue()));
    }
}
