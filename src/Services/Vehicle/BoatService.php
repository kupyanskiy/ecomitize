<?php

namespace Ecomitize\Services\Vehicle;

/**
 * Class BoatService
 *
 * @package Ecomitize\Services
 */
class BoatService extends VehicleAbstractService
{
    public function animate(): void
    {
        $this->move();
        $this->swim();
    }

    public function swim() :void
    {
        $this->view->render($this->getName() . ' swimming');
    }

    public function move() :void
    {
        $this->view->render($this->getName() . ' moving');
    }
}