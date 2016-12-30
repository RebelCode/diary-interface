<?php

namespace RebelCode\Diary\Query\Condition;

/**
 * An evaluable term that represents a property of a storage entity.
 *
 * @since [*next-version*]
 */
interface EntityPropertyTermInterface extends \Dhii\Evaluable\EvaluableInterface
{
    /**
     * Gets the name of the entity.
     *
     * @since [*next-version*]
     *
     * @return string The entity identifier.
     */
    public function getEntity();

    /**
     * Gets the name of the property.
     *
     * @since [*next-version*]
     *
     * @return string The property identifier.
     */
    public function getProperty();
}
