<?php

namespace RebelCode\Diary\Query\Condition\Test;

use RebelCode\Diary\Query\Condition\BookingPropertyTermInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Query\Condition\BookingPropertyTermInterface}.
 *
 * @since [*next-version*]
 */
class BookingPropertyTermInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Query\\Condition\\BookingPropertyTermInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return BookingPropertyTermInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->evaluate()
            ->getEntity()
            ->getProperty()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\Query\Condition\BookingPropertyTermInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('\\RebelCode\\Diary\\Query\\Condition\\EntityPropertyTermInterface', $subject);
        $this->assertInstanceOf('\\Dhii\\Evaluable\\EvaluableInterface', $subject);
    }
}
