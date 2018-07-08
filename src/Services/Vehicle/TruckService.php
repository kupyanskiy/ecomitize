<?php

namespace Ecomitize\Services\Vehicle;

/**
 * Class CarService
 *
 * @package Ecomitize\Services
 */
class TruckService extends VehicleAbstractService
{
    public function animate(): void
    {
        $this->move();
        $this->stop();
        $this->emptyLoads();
        $this->move();
    }

    public function move() :void
    {
        $this->view->render($this->getName().' moving');
    }

    public function emptyLoads() :void
    {
        $this->view->render($this->getName() .' empty loads');
    }
}