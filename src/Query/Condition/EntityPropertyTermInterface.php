<?php

namespace RebelCode\Diary\Query\Condition;

/**
 * An evaluable term that represents a property of a storage entity.
 *
 * @since 0.2
 */
interface EntityPropertyTermInterface extends \Dhii\Evaluable\EvaluableInterface
{
    /**
     * Gets the name of the entity.
     *
     * @since 0.2
     *
     * @return string The entity identifier.
     */
    public function getEntity();

    /**
     * Gets the name of the property.
     *
     * @since 0.2
     *
     * @return string The property identifier.
     */
    public function getProperty();
}
