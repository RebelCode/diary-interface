<?php

namespace RebelCode\Diary\Test\Component;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Component\StorageAdapterInterface}.
 *
 * @since [*next-version*]
 */
class StorageAdapterInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\Component\\StorageAdapterInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \RebelCode\Diary\Component\StorageAdapterInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getRecord()
            ->getRecords()
            ->hasRecord()
            ->hasRecords()
            ->deleteRecord()
            ->deleteRecords()
            ->insertRecord()
            ->insertRecords()
            ->query()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\Component\StorageAdapterInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
