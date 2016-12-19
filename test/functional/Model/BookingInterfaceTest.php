<?php

namespace RebelCode\Diary\Test\Model;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Model\BookingInterface}.
 *
 * @since [*next-version*]
 */
class BookingInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\Model\\BookingInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \RebelCode\Diary\Model\BookingInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getId()
            ->getStart()
            ->getEnd()
            ->getApp()
            ->getMeta()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\Model\BookingInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('\\RebelCode\\Diary\\DateTime\\PeriodInterface', $subject);
        $this->assertInstanceOf('\\RebelCode\\Diary\\Model\\ModelInterface', $subject);
    }
}
