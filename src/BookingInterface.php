<?php

namespace RebelCode\Diary;

/**
 * Describes any object that can represent a booked period of time.
 *
 * @since 0.1
 */
interface BookingInterface extends PeriodInterface
{
    /**
     * Gets the booking ID.
     *
     * @since 0.1
     *
     * @return int The booking ID.
     */
    public function getId();
}
