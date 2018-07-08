<?php

namespace Ecomitize\Services\Vehicle;

use Ecomitize\Services\FuelInterface;
use Ecomitize\Services\VehicleInterface;
use Ecomitize\Services\ViewInterface;

/**
 * Class VehicleService
 *
 * @package Ecomitize\Services
 */
abstract class VehicleAbstractService implements VehicleInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var ViewInterface
     */
    protected $view;

    /**
     * @var FuelInterface
     */
    protected $fuel;

    abstract public function animate() :void;

    /**
     * VehicleService constructor.
     *
     * @param ViewInterface $view
     * @param FuelInterface $fuel
     */
    public function __construct(ViewInterface $view, FuelInterface $fuel)
    {
        $this->view = $view;
        $this->fuel = $fuel;
    }

    /**
     * @param string $name
     *
     * @return VehicleInterface
     */
    public function setName(string $name) :VehicleInterface
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }

    public function refuel() :void
    {
        $this->view->render($this->getName() . ' refuel ' . $this->fuel);
    }

    public function stop() :void
    {
        $this->view->render($this->getName().' stopping');
    }
}