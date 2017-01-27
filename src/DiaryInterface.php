<?php

namespace RebelCode\Diary;

use \Dhii\Storage\Query\QueryInterface;
use \RebelCode\Diary\Storage\ChangesetInterface;

/**
 * Represents the hub of the Diary library.
 *
 * @since 0.1
 */
interface DiaryInterface
{
    /**
     * Gets the bookings that match a given query.
     *
     * @since 0.3
     *
     * @param QueryInterface $query The query that defines the criteria.
     *
     * @return BookingInterface[]|null An array of booking instances or null on failure.
     */
    public function get(QueryInterface $query);

    /**
     * Inserts the given booking into storage.
     *
     * The ID of the given instance will be ignored.
     * The inserted ID will be assigned to the booking on success.
     *
     * @since 0.3
     *
     * @param BookingInterface $booking The booking instances. The ID will be ignored.
     *
     * @return int|bool The inserted ID on success, false on failure.
     */
    public function insert(BookingInterface $booking);

    /**
     * Updates the bookings in storage that match a specific query.
     *
     * If a {@see ChangesetInterface} is given as the first parameter, only the fields specified
     * by the changeset will be updated. If a {@see BookingInterface} instance is given, all the
     * fields will be updated except for the IDs.
     *
     * The {@see QueryInterface} parameter can be omitted if the first parameter is a {@see BookingInterface}
     * instance. In this case, only the booking with the instance's ID will be updated.
     *
     * @since 0.3
     *
     * @param BookingInterface|ChangesetInterface $changes A booking instance or a changeset.
     * @param QueryInterface                      $query   The query that defines the criteria.
     *                                                     Default: null
     *
     * @return bool True of success, false on failure.
     */
    public function update($changes, QueryInterface $query = null);

    /**
     * Deletes the bookings that match a given query.
     *
     * @since 0.3
     *
     * @param QueryInterface $query The query that defines the criteria.
     *
     * @return bool True on success, false on failure.
     */
    public function delete(QueryInterface $query);
}
