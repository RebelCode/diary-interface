<?php

namespace RebelCode\Diary\DateTime;

/**
 * Any object that can represent dates and times.
 *
 * @since 0.1
 */
interface DateTimeInterface
{
    /**
     * Gets the Unix timestamp.
     *
     * @since 0.1
     *
     * @return int The Unix timestamp representing the date.
     */
    public function getTimestamp();
}
