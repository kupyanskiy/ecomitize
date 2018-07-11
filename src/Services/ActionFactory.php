<?php

namespace Ecomitize\Services;

use Ecomitize\Services\Vehicle\VehicleService;
use Ecomitize\Services\View\ViewService;

/**
 * Class ActionFactory
 *
 * @package Ecomitize\Services
 */
class ActionFactory
{
    public static function create(string $action) :ActionAbstractService
    {
        $classNameAction = '\\Ecomitize\\Services\\Action\\'.ucwords($action).'ActionService';

        if (!class_exists($classNameAction)) {
            throw new \RuntimeException(sprintf("Class [%s] don't find", $classNameAction));
        }

        return new $classNameAction();
    }
}
