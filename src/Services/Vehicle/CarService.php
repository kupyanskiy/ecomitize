<?php

namespace Ecomitize\Services\Vehicle;

/**
 * Class CarService
 *
 * @package Ecomitize\Services
 */
class CarService extends VehicleAbstractService
{
    public function animate(): void
    {
        $this->move();
        $this->musicOn();
    }

    public function move() :void
    {
        $this->view->render($this->getName().' moving');
    }

    public function musicOn() :void
    {
        $this->view->render($this->getName().' music switched on');
    }
}