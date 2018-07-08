<?php

use Ecomitize\Services\VehicleFactory;
use Ecomitize\Services\View\ViewService;
use PHPUnit\Framework\TestCase;

class BoatServiceTest extends TestCase
{
    public function test()
    {
        $view = $this->getMockBuilder(ViewService::class)
            ->setMethods(['render'])
            ->getMock();

        $view->expects($this->exactly(4))
            ->method('render')
            ->withConsecutive(
                ['boat moving'],
                ['boat swimming'],
                ['boat stopping'],
                ['boat refuel diesel']
            );

        $vehicle = VehicleFactory::create('boat', 'diesel', $view)->setName('boat');
        $vehicle->animate();
        $vehicle->stop();
        $vehicle->refuel();
    }
}
