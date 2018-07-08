<?php

namespace Ecomitize\Services;

/**
 * Interface VehicleInterface
 *
 * @package Ecomitize\Services
 */
interface VehicleInterface
{
    /**
     * @param string $name
     *
     * @return VehicleInterface
     */
    public function setName(string $name) :VehicleInterface;
    public function getName() :string;

    public function animate() :void;
    public function stop() :void;
    public function refuel() :void;
}