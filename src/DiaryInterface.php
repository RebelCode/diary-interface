<?php

namespace RebelCode\Diary;

use Dhii\Storage\Query\QueryInterface;

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
     * @param QueryInterface $query The query.
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
     * @since 0.3
     *
     * @param BookingInterface $booking The booking instances. The ID will be ignored.
     *
     * @return int|bool The inserted ID on success, false on failure.
     */
    public function insert(BookingInterface $booking);

    /**
     * Updates the given booking in storage.
     *
     * The given instance's ID must exist in storage.
     *
     * @since 0.3
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return bool True of success, false on failure.
     */
    public function update(BookingInterface $booking);

    /**
     * Deletes the bookings that match a given query.
     *
     * @since 0.3
     *
     * @param BookingQueryInterface $query The query.
     *
     * @return bool True on success, false on failure.
     */
    public function delete(QueryInterface $query);
}
