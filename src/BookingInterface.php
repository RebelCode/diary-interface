<?php

namespace RebelCode\Diary;

use \RebelCode\Diary\DateTime\PeriodInterface;

/**
 * Any object that represents a booked period of time registered in a booking system.
 *
 * @since 0.1
 */
interface BookingInterface
{
    /**
     * Gets the booking ID.
     *
     * @since 0.1
     *
     * @return int The booking ID.
     */
    public function getId();

    /**
     * Gets the booked period of time.
     *
     * @since 0.3
     *
     * @return PeriodInterface The booked period.
     */
    public function getPeriod();
}
