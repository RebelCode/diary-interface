<?php

namespace RebelCode\Diary\Model;

use RebelCode\Diary\DateTime\PeriodInterface;
use RebelCode\Diary\ModelInterface;

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
     * @return array An associative array of meta data keys and values.
     */
    public function getMeta();
}
