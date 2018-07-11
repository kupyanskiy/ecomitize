<?php

use Ecomitize\Services\ActionFactory;
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

        $vehicle = VehicleFactory::create('car', 'gasoline', $view);
        $vehicle->setName('bmv');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->add(ActionFactory::create('musicOn'));
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
                ['bmv moving'],
                ['bmv music switched on']
            );

        $vehicle = VehicleFactory::create('car', 'gasoline', $view);
        $vehicle->setName('bmv');
        $vehicle->add(ActionFactory::create('move'));
        $vehicle->render();
        $vehicle->clear();
        $vehicle->add(ActionFactory::create('musicOn'));
        $vehicle->render();
    }
}
