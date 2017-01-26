<?php

namespace RebelCode\Diary\FuncTest\Storage;

use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\Diary\Storage\ChangesetAwareInterface}.
 *
 * @since [*next-version*]
 */
class ChangesetAwareInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Storage\\ChangesetAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return RebelCode\Diary\Storage\ChangesetAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getChangeset()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
