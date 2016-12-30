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
     * Gets the model's ID.
     *
     * @since 0.1
     *
     * @return int The integer ID.
     */
    public function getId();
}
