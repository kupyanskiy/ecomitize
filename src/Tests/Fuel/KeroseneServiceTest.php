<?php

namespace Ecomitize\Tests\Fuel;

use Ecomitize\Services\Fuel\KeroseneService;
use PHPUnit\Framework\TestCase;

/**
 * Class KeroseneServiceTest
 *
 * @package Ecomitize\Tests\Fuel
 */
class KeroseneServiceTest extends TestCase
{
    public function testToString()
    {
        $kerosene = new KeroseneService();

        $this->assertEquals('kerosene', (string)$kerosene);
    }
}