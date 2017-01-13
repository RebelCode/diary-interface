<?php

namespace RebelCode\Diary\Test;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\PeriodInterface}.
 *
 * @since 0.1
 */
class PeriodInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\PeriodInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \RebelCode\Diary\PeriodInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getStart()
            ->getEnd()
            ->getDuration()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @covers \RebelCode\Diary\PeriodInterface
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
