<?php

namespace RebelCode\Diary\Storage;

/**
 * Any object that serves as an adapter for communicating with storage.
 *
 * @since [*next-version*]
 */
interface StorageAdapterInterface
{
    /**
     * Submits a query.
     *
     * @param QueryInterface $query The query instance.
     *
     * @return array The query results.
     */
    public function query(QueryInterface $query);
}
