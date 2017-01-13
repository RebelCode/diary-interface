<?php

namespace RebelCode\Diary;

/**
 * Describes any object that represents a particular period of time.
 *
 * @since 0.1
 */
interface PeriodInterface
{
    /**
     * Gets the datetime for the start of the period.
     *
     * @since 0.1
     *
     * @return DateTimeInterface
     */
    public function getStart();

    /**
     * Gets the datetime for the end of the period.
     *
     * @since 0.1
     *
     * @return DateTimeInterface
     */
    public function getEnd();

    /**
     * Gets the duration of the period.
     *
     * @since [*next-version*]
     *
     * @return int The duration in seconds.
     */
    public function getDuration();
}
