<?php

namespace RebelCode\Diary\Storage;

use \Dhii\Expression\ExpressionInterface;

/**
 * Something that defines a set of changes.
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
     * @return ExpressionInterface[] An array of expressions.
     */
    public function getChanges();
}
