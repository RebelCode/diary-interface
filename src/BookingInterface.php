<?php

namespace RebelCode\Diary;

/**
 * Any object that represents a booked period of time registered in a booking system.
 *
 * @since 0.1
 */
interface BookingInterface extends Storage\ChangeAwareInterface
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
     * @since [*next-version*]
     *
     * @return PeriodInterface The booked period.
     */
    public function getPeriod();
}
