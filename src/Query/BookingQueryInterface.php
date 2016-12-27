<?php

namespace RebelCode\Diary\Query;

/**
 * Any object that can describe a bookings query.
 *
 * @since [*next-version*]
 */
interface BookingQueryInterface
{
    /**
     * Gets the query condition.
     *
     * @return \Dhii\Espresso\BooleanExpressionInterface
     */
    public function getCondition();
}
