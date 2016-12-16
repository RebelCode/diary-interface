<?php

namespace RebelCode\Diary\Test\DateTime;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\DateTime\PeriodInterface}.
 *
 * @since [*next-version*]
 */
class PeriodInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\DateTime\\PeriodInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return \RebelCode\Diary\DateTime\PeriodInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getStart()
            ->getEnd()
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
