<?php

namespace RebelCode\Diary\Storage;

use Dhii\Expression\ExpressionInterface;

/**
 * Something that is aware of a set of changes.
 *
 * @since [*next-version*]
 */
interface ChangeAwareInterface
{
    /**
     * Retrieves the expressions that define the changes.
     *
     * @since [*next-version*]
     *
     * @return ExpressionInterface[] An associative array of field names as keys and expressions as values.
     */
    public function getChanges();
}
