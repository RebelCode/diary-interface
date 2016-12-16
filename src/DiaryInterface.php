<?php

namespace RebelCode\Diary;

/**
 * Represents the hub of the Diary library.
 *
 * @since [*next-version*]
 */
interface DiaryInterface extends \Dhii\App\AppInterface
{
    /**
     * Gets the storage adapter component.
     * 
     * @return Component\StorageAdapterInterface The storage adapter instance.
     */
    public function getStorageAdapter();
}
