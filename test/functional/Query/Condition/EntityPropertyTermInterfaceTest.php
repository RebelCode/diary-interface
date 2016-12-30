<?php

namespace RebelCode\Diary\Query\Condition\Test;

use RebelCode\Diary\Query\Condition\EntityPropertyTermInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \RebelCode\Diary\Query\Condition\EntityPropertyTermInterface}.
 *
 * @since 0.2
 */
class EntityPropertyTermInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Diary\\Query\\Condition\\EntityPropertyTermInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @return EntityPropertyTermInterface
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
     * @covers \RebelCode\Diary\Query\Condition\EntityPropertyTermInterface
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject);
        $this->assertInstanceOf('\\Dhii\\Evaluable\\EvaluableInterface', $subject);
    }
}
