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
     * @since [*next-version*]
     *
     * @param QueryInterface $query The query that defines the criteria.
     *
     * @return BookingInterface[] The bookings that matched the query.
     */
    public function get(QueryInterface $query);

    /**
     * Inserts the given booking into storage.
     *
     * The ID of the given instance will be ignored.
     * The inserted ID will be assigned to the booking on success.
     *
     * @since [*next-version*]
     *
     * @param BookingInterface $booking The booking instances. The ID will be ignored.
     *
     * @return int|bool The inserted ID on success, false on failure.
     */
    public function insert(BookingInterface $booking);

    /**
     * Updates the bookings in storage that match a specific query.
     *
     * @since [*next-version*]
     *
     * @param ChangesetInterface $changeset The changes to be performed in storage.
     * @param QueryInterface $query The query that defines the criteria.
     *
     * @return bool True of success, false on failure.
     */
    public function update(ChangesetInterface $changeset, QueryInterface $query);

    /**
     * Deletes the bookings that match a given query.
     *
     * @since [*next-version*]
     *
     * @param QueryInterface $query The query that defines the criteria.
     *
     * @return bool True on success, false on failure.
     */
    public function delete(QueryInterface $query);
}
