<?php

use Ecomitize\Services\ActionFactory;
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

        $vehicle = VehicleFactory::create('plane', 'kerosene', $view);
        $vehicle->setName('helicopter');
        $vehicle->add(ActionFactory::create('takeOff'));
        $vehicle->add(ActionFactory::create('fly'));
        $vehicle->add(ActionFactory::create('landing'));
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
                ['helicopter took off'],
                ['helicopter flying']
            );

        $vehicle = VehicleFactory::create('plane', 'kerosene', $view);
        $vehicle->setName('helicopter');
        $vehicle->add(ActionFactory::create('takeOff'));
        $vehicle->render();
        $vehicle->clear();
        $vehicle->add(ActionFactory::create('fly'));
        $vehicle->render();
    }
}
