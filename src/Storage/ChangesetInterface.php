<?php

namespace RebelCode\Diary\Storage;

/**
 * Something that represents a set of changes.
 *
 * @since 0.3
 */
interface ChangesetInterface
{
    /**
     * Retrieves the expressions that define the changes.
     *
     * @since 0.3
     *
     * @return array An associative array of field names as keys and the changed values.
     *               Primitive values will be taken literal while objects are expected to be
     *               of type {@see Dhii\Evaluable\EvaluableInterface}.
     */
    public function getChanges();
}
