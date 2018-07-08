<?php

namespace Ecomitize\Services\Vehicle;

/**
 * Class PlaneService
 *
 * @package Ecomitize\Services
 */
class PlaneService  extends VehicleAbstractService
{
    public function animate(): void
    {
        $this->takeOff();
        $this->fly();
        $this->landing();
    }

    public function takeOff() :void
    {
        $this->view->render($this->getName().' took off');
    }

    public function landing() :void
    {
        $this->view->render($this->getName().' landing');
    }

    public function fly() :void
    {
        $this->view->render($this->getName().' flying');
    }
}