<?php

namespace RebelCode\Diary\Query;

/**
 * Any object that can describe a bookings query.
 *
 * @since 0.2
 */
interface BookingQueryInterface
{
    /**
     * Gets the query condition.
     *
     * @since 0.2
     *
     * @return BookingConditionInterface
     */
    public function getCondition();
}
