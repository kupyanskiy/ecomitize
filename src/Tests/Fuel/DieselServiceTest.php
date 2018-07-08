<?php

namespace Ecomitize\Tests\Fuel;

use Ecomitize\Services\Fuel\DieselService;
use PHPUnit\Framework\TestCase;

/**
 * Class DieselServiceTest
 *
 * @package Ecomitize\Tests\Fuel
 */
class DieselServiceTest extends TestCase
{
    public function testToString()
    {
        $diesel = new DieselService();

        $this->assertEquals('diesel', (string)$diesel);
    }
}