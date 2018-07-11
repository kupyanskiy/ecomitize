<?php

use Ecomitize\Services\ActionFactory;
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

        $vehicle = VehicleFactory::create('truck', 'diesel', $view);
        $vehicle->setName('kamaz');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->add(ActionFactory::create('stop'));
        $vehicle->add(ActionFactory::create('emptyLoads'));
        $vehicle->add(ActionFactory::create('move'));
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
                ['kamaz moving'],
                ['kamaz stopping']
            );

        $vehicle = VehicleFactory::create('truck', 'diesel', $view);
        $vehicle->setName('kamaz');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->render();
        $vehicle->clear();
        $vehicle->add(ActionFactory::create('stop'));
        $vehicle->render();
    }
}
