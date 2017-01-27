<?php

namespace RebelCode\Diary\FuncTest\DateTime;

use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\DateTime\DateTimeInterface}.
 *
 * @since 0.1
 */
class DateTimeInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = '\\RebelCode\\Diary\\DateTime\\DateTimeInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \RebelCode\Diary\DateTime\DateTimeInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getTimestamp()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
    }
}
