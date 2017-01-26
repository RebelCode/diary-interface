<?php

namespace RebelCode\Diary\Storage;

use Dhii\Expression\ExpressionInterface;

/**
 * Something that represents a set of changes.
 *
 * @since [*next-version*]
 */
interface ChangesetInterface
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
