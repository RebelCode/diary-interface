<?php

namespace RebelCode\Diary;

/**
 * Represents the hub of the Diary library.
 *
 * @since [*next-version*]
 */
interface DiaryInterface
{
    /**
     * Gets the booking with the given ID.
     *
     * @param string|int $id The ID of the booking.
     *
     * @return BookingInterface|null The booking with the given ID or null if the ID was not found.
     */
    public function getBooking($id);

    /**
     * Queries the storage for bookings.
     *
     * @param array $query An associative array containing the query args.
     *
     * @return Model\BookingInterface[] An array of booking instances that match the given query.
     */
    public function queryBookings(array $query);

    /**
     * Inserts the given booking into storage.
     *
     * The ID of the given instance will be ignored. An ID will be assigned to the booking on success.
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return string|int The ID of the inserted booking or false on failure.
     */
    public function insertBooking(BookingInterface $booking);

    /**
     * Updates an existing booking.
     *
     * @param BookingInterface $booking The booking instance.
     *
     * @return bool True of success, false on failure.
     */
    public function updateBooking(BookingInterface $booking);

    /**
     * Deletes the booking with the given ID.
     *
     * @param string|int $id The ID of the booking.
     *
     * @return bool True on success, false on failure.
     */
    public function deleteBooking($id);
}
