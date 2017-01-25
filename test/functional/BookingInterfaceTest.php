<?php

namespace RebelCode\Diary\Test;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Model\BookingInterface}.
 *
 * @since 0.1
 */
class BookingInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\BookingInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \RebelCode\Diary\BookingInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
            ->getPeriod()
            ->getChanges()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\BookingInterface
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
