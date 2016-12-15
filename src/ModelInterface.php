<?php

namespace RebelCode\Diary;

/**
 * An object that represents an entity in the problem domain.
 *
 * @since [*next-version*]
 */
interface ModelInterface extends \Dhii\App\ModelInterface
{
    /**
     * Gets the model's ID.
     *
     * @since [*next-version*]
     *
     * @return int The integer ID.
     */
    public function getId();
}
