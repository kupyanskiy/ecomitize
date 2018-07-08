<?php

use Ecomitize\Services\VehicleFactory;
use Ecomitize\Services\View\ViewService;
use PHPUnit\Framework\TestCase;

class CarServiceTest extends TestCase
{
    public function test()
    {
        $view = $this->getMockBuilder(ViewService::class)
            ->setMethods(['render'])
            ->getMock();

        $view->expects($this->exactly(4))
            ->method('render')
            ->withConsecutive(
                ['bmv moving'],
                ['bmv music switched on'],
                ['bmv stopping'],
                ['bmv refuel gasoline']
            );

        $vehicle = VehicleFactory::create('car', 'gasoline', $view)->setName('bmv');
        $vehicle->animate();
        $vehicle->stop();
        $vehicle->refuel();
    }
}
