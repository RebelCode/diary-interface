<?php

namespace RebelCode\Diary\Test;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Query\BookingQueryInterface}.
 *
 * @since 0.2
 */
class BookingQueryInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Query\\BookingQueryInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return \RebelCode\Diary\Query\BookingQueryInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getCondition()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\Query\BookingQueryInterface
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
