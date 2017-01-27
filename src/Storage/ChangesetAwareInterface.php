<?php

namespace RebelCode\Diary\Storage;

/**
 * Something that can have a changeset.
 *
 * @since 0.3
 */
interface ChangesetAwareInterface
{
    /**
     * Retrieves the changeset.
     *
     * @since 0.3
     *
     * @return ChangesetInterface
     */
    public function getChangeset();
}
