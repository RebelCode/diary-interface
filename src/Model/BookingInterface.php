<?php

namespace RebelCode\Diary\Model;

use RebelCode\Diary\DateTime\PeriodInterface;

/**
 * Describes any object that can represent a booked period of time.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends ModelInterface, PeriodInterface
{
    /**
     * Gets the meta data for this booking.
     *
     * @param string $key [optional] The key of the meta data entry to return. Default: null
     *
     * @return array If $key is null, an associative array of meta data keys and values.
     *               If $key is a string, the meta value for that key or null if the key does not exist.
     */
    public function getMeta($key = null);
}
