<?php

/** @see MAChitgarha\Component\Json */
namespace MAChitgarha\UnitTest\Json;

use PHPUnit\Framework\TestCase;
use MAChitgarha\Component\Json;

class ScalarDataTest extends TestCase
{
    /**
     * Tests Json::isCountable(), Json::toCountable() and Json::count() methods.
     * @dataProvider scalarJsonProvider
     */
    public function testCountable(Json $json)
    {
        $this->assertFalse($json->isCountable());
        $this->assertTrue($json->toCountable()->isCountable());
        $this->assertEquals(1, $json->count());
    }

    public function scalarJsonProvider()
    {
        $json = new Json(random_bytes(10));

        return [
            [clone $json]
        ];
    }
}
