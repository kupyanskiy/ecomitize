<?php

namespace Ecomitize\Tests\Fuel;

use Ecomitize\Services\Fuel\GasolineService;
use PHPUnit\Framework\TestCase;

/**
 * Class GasolineServiceTest
 *
 * @package Ecomitize\Tests\Fuel
 */
class GasolineServiceTest extends TestCase
{
    public function testToString()
    {
        $gasoline = new GasolineService();

        $this->assertEquals('gasoline', (string)$gasoline);
    }
}