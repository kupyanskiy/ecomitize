<?php

use Ecomitize\Services\VehicleFactory;
use Ecomitize\Services\View\ViewService;
use PHPUnit\Framework\TestCase;

class TruckServiceTest extends TestCase
{
    public function test()
    {
        $view = $this->getMockBuilder(ViewService::class)
            ->setMethods(['render'])
            ->getMock();

        $view->expects($this->exactly(6))
            ->method('render')
            ->withConsecutive(
                ['kamaz moving'],
                ['kamaz stopping'],
                ['kamaz empty loads'],
                ['kamaz moving'],
                ['kamaz stopping'],
                ['kamaz refuel diesel']
            );

        $vehicle = VehicleFactory::create('truck', 'diesel', $view)->setName('kamaz');
        $vehicle->animate();
        $vehicle->stop();
        $vehicle->refuel();
    }
}
