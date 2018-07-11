<?php

use Ecomitize\Services\ActionFactory;
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

        $vehicle = VehicleFactory::create('boat', 'diesel', $view);
        $vehicle->setName('boat');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->add(ActionFactory::create('swim'));
        $vehicle->add(ActionFactory::create('stop'));
        $vehicle->add(ActionFactory::create('refuel'));
        $vehicle->render();
    }

    public function testClear()
    {
        $view = $this->getMockBuilder(ViewService::class)
            ->setMethods(['render'])
            ->getMock();

        $view->expects($this->exactly(2))
            ->method('render')
            ->withConsecutive(
                ['boat moving'],
                ['boat swimming']
            );

        $vehicle = VehicleFactory::create('boat', 'diesel', $view);
        $vehicle->setName('boat');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->render();
        $vehicle->clear();
        $vehicle->add(ActionFactory::create('swim'));
        $vehicle->render();
    }
}
