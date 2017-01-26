<?php

namespace RebelCode\Diary\FuncTest\Storage;

use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\Diary\Storage\ChangesetInterface}.
 *
 * @since 0.3
 */
class ChangesetInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Storage\\ChangesetInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.3
     *
     * @return RebelCode\Diary\Storage\ChangesetInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getChanges()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.3
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
