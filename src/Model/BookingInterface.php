<?php

namespace RebelCode\Diary\Model;

use \RebelCode\Diary\ModelInterface;
use \RebelCode\Diary\PeriodInterface;

/**
 * Describes any object that can represent a booked period of time.
 *
 * @since [*next-version*]
 */
interface BookingInterface extends ModelInterface, PeriodInterface
{
}
