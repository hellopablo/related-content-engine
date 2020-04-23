<?php

namespace Tests\TestCases\StoreTest\EphemeralTest;

use Exception;
use PHPUnit\Framework\TestCase;
use Tests\Traits;

/**
 * Class DumpTest
 *
 * @package Tests\TestCases\StoreTest\EphemeralTest
 */
class DumpTest extends TestCase
{
    use Traits\Stores\Ephemeral;

    // --------------------------------------------------------------------------

    /**
     * @covers \HelloPablo\RelatedContentEngine\Store\Ephemeral::delete
     * @covers \HelloPablo\RelatedContentEngine\Store\MySQL::delete
     * @throws Exception
     */
    public function test_can_dump_data()
    {
        $store = static::getStore();
        $this->assertCount(0, $store->dump());

        $this->assertCount(3, $store->dump());
        $store = static::getStore(['data' => [1, 2, 3]]);
    }
}
