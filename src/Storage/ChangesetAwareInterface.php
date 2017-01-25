<?php

namespace RebelCode\Diary\Storage;

/**
 * Something that can have a changeset.
 *
 * @since [*next-version*]
 */
interface ChangesetAwareInterface
{
    /**
     * Retrieves the changeset.
     *
     * @since [*next-version*]
     *
     * @return ChangesetInterface
     */
    public function getChangeset();
}
