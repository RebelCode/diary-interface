<?php

namespace RebelCode\Diary\Query\Test;

/**
 * Tests {@see \RebelCode\Diary\Query\BookingConditionInterface}.
 *
 * @since [*next-version*]
 */
class BookingConditionInterfaceTest extends \Xpmock\TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Query\\BookingConditionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \RebelCode\Diary\Query\BookingConditionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->evaluate()
            ->getTerms()
            ->isNegated()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\Query\BookingConditionInterface
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('Dhii\\Espresso\\BooleanExpressionInterface', $subject);
    }
}
