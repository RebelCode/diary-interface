<?php

namespace RebelCode\Diary;

/**
 * Any object that can represent dates and times.
 *
 * @since [*next-version*]
 */
interface DateTimeInterface
{
    /**
     * Gets the Unix timestamp.
     *
     * @since [*next-version*]
     *
     * @return int The Unix timestamp representing the date.
     */
    public function getTimestamp();
}
