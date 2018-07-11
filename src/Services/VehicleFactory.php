<?php

namespace Ecomitize\Services;

use Ecomitize\Services\Vehicle\VehicleService;
use Ecomitize\Services\View\ViewService;

/**
 * Class VehicleFactory
 *
 * @package Ecomitize\Services
 */
class VehicleFactory
{
    public static function create(string $vehicle, string $fuel, ViewInterface $view = null) :VehicleService
    {
        $classNameVehicle = '\\Ecomitize\\Services\\Vehicle\\'.ucwords($vehicle).'Service';
        $classNameFuel = '\\Ecomitize\\Services\\Fuel\\'.ucwords($fuel).'Service';

        if (!class_exists($classNameVehicle)) {
            throw new \RuntimeException(sprintf("Class [%s] don't find", $classNameVehicle));
        }

        if (!class_exists($classNameFuel)) {
            throw new \RuntimeException(sprintf("Class [%s] don't find", $classNameFuel));
        }

        if (!$view) {
            $view = new ViewService();
        }

        $vehicle = new $classNameVehicle();
        $vehicle->setView($view);
        $vehicle->setFuel(new $classNameFuel());

        return $vehicle;
    }
}
