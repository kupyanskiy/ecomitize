<?php

namespace Ecomitize\Services\Fuel;

use Ecomitize\Services\FuelInterface;

/**
 * Class FuelAbstractService
 *
 * @package Ecomitize\Services\Fuel
 */
class FuelService implements FuelInterface
{
    public function __toString(): string
    {
        return strtolower(static::TYPE);
    }
}