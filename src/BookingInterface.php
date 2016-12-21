<?php

namespace RebelCode\Diary;

/**
 * Describes any object that can represent a booked period of time.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends PeriodInterface
{
    /**
     * Gets the model's ID.
     *
     * @since [*next-version*]
     *
     * @return int The integer ID.
     */
    public function getId();

    /**
     * Gets the meta data for this booking.
     *
     * @since [*next-version*]
     *
     * @param string $key [optional] The key of the meta data entry to return. Default: null
     *
     * @return array If $key is null, an associative array of meta data keys and values.
     *               If $key is a string, the meta value for that key or null if the key does not exist.
     */
    public function getMeta($key = null);
}
