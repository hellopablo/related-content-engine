<?php

namespace Tests\TestCases;

use HelloPablo\RelatedContentEngine\Engine;
use PHPUnit\Framework\TestCase;
use Tests\Mocks;

/**
 * Class EngineTest
 *
 * @package Tests\TestCases
 */
class EngineTest extends TestCase
{
    /**
     * @covers \HelloPablo\RelatedContentEngine\Engine::__construct
     */
    public function test_store_is_a_required_argument()
    {
        $this->expectException(\ArgumentCountError::class);
        new Engine();
    }

    // --------------------------------------------------------------------------

    /**
     * @covers \HelloPablo\RelatedContentEngine\Engine::__construct
     */
    public function test_store_must_be_instance_of_store()
    {
        $this->expectException(\TypeError::class);
        new Engine(null);
    }

    // --------------------------------------------------------------------------

    /**
     * @covers \HelloPablo\RelatedContentEngine\Engine::__construct
     */
    public function test_store_automatically_connects()
    {
        $this->expectException(\Exception::class);
        new Engine(new Mocks\Store\FailedConnection([]));
    }
}