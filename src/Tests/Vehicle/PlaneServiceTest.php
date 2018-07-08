<?php

use Ecomitize\Services\VehicleFactory;
use Ecomitize\Services\View\ViewService;
use PHPUnit\Framework\TestCase;

class PlaneServiceTest extends TestCase
{
    public function test()
    {
        $view = $this->getMockBuilder(ViewService::class)
            ->setMethods(['render'])
            ->getMock();

        $view->expects($this->exactly(5))
            ->method('render')
            ->withConsecutive(
                ['helicopter took off'],
                ['helicopter flying'],
                ['helicopter landing'],
                ['helicopter stopping'],
                ['helicopter refuel kerosene']
            );

        $vehicle = VehicleFactory::create('plane', 'kerosene', $view)->setName('helicopter');
        $vehicle->animate();
        $vehicle->stop();
        $vehicle->refuel();
    }
}
