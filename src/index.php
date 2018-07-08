<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use \Ecomitize\Services\VehicleFactory;
use \Ecomitize\Services\VehicleInterface;

$vehicles = [
    VehicleFactory::create('car', 'gasoline')
        ->setName('bmv'),
    VehicleFactory::create('boat', 'diesel')
        ->setName('boat'),
    VehicleFactory::create('plane', 'kerosene')
        ->setName('helicopter'),
    VehicleFactory::create('truck', 'diesel')
        ->setName('kamaz'),
];

/**
 * @var $vehicle VehicleInterface
 */
foreach ($vehicles as $vehicle) {
    $vehicle->animate();
    $vehicle->stop();
    $vehicle->refuel();
}
