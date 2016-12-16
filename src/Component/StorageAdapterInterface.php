<?php

namespace RebelCode\Diary\Component;

/**
 * Any object that serves as an adapter for communicating with storage.
 *
 * @since [*next-version*]
 */
interface StorageAdapterInterface
{
    /**
     * Gets the record with a given ID.
     *
     * @param int|string $recordId The unique ID of the record.
     *
     * @return mixed The fetched record.
     */
    public function getRecord($recordId);

    /**
     * Gets the records with a given IDs.
     *
     * @param array $recordIds An array The unique IDs of the records to fetch.
     *
     * @return array An associative array with the IDs as keys and the fetched records as values.
     *               Records that could not be fetched will have their entry's value set to null.
     */
    public function getRecords($recordIds);

    /**
     * Checks if a record with the given ID exists.
     *
     * @param int|string $recordId The unique ID of the record.
     *
     * @return bool True if a record with the given ID exists, false if not.
     */
    public function hasRecord($recordId);

    /**
     * Checks if records with the given IDs exist.
     *
     * @param array $recordIds An array The unique IDs of the records.
     *
     * @return array An associative array of ID and boolean pairs.
     *               Each boolean value will be true if the record with the corresponding ID exists and false if not.
     */
    public function hasRecords(array $recordIds);

    /**
     * Deletes a record with the given ID.
     *
     * @param int|string $recordId The unique ID of the record.
     *
     * @return bool True if a record with the given ID exists and was deleted, false otherwise.
     */
    public function deleteRecord($recordId);

    /**
     * Deletes the records with the given IDs.
     *
     * @param array $recordIds The unique ID of the record.
     *
     * @return bool True if a record with the given ID exists and was deleted, false otherwise.
     */
    public function deleteRecords($recordIds);

    /**
     * Inserts a record into storage.
     *
     * @param array $record [optional] An associative array containing the record data as key-value pairs. Default: array()
     *
     * @return int|bool The inserted ID of the record on success or false on failure.
     */
    public function insertRecord(array $record = array());

    /**
     * Inserts the given records into storage.
     *
     * @param array $records An array of records: each a sub-array containing the record data.
     *
     * @return bool True on success, false on failure.
     */
    public function insertRecords(array $records);

    /**
     * Submits a query to storage.
     *
     * @param mixed $query The query.
     *
     * @return array The query results.
     */
    public function query($query);
}
