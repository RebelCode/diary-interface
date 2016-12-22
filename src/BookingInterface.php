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
}
