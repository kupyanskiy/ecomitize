<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use Ecomitize\Services\ActionFactory;
use \Ecomitize\Services\VehicleFactory;

$bmv = VehicleFactory::create('car', 'gasoline');
$bmv->setName('bmv');
$bmv->add(ActionFactory::create('move'));
$bmv->add(ActionFactory::create('musicOn'));
$bmv->add(ActionFactory::create('stop'));
$bmv->add(ActionFactory::create('refuel'));
$bmv->render();

$boat = VehicleFactory::create('boat', 'diesel');
$boat->setName('boat');
$boat->add(ActionFactory::create('move'));
$boat->add(ActionFactory::create('swim'));
$boat->add(ActionFactory::create('stop'));
$boat->add(ActionFactory::create('refuel'));
$boat->render();

$helicopter = VehicleFactory::create('plane', 'kerosene');
$helicopter->setName('helicopter');
$helicopter->add(ActionFactory::create('takeOff'));
$helicopter->add(ActionFactory::create('fly'));
$helicopter->add(ActionFactory::create('landing'));
$helicopter->add(ActionFactory::create('stop'));
$helicopter->add(ActionFactory::create('refuel'));
$helicopter->render();

$kamaz = VehicleFactory::create('truck', 'diesel');
$kamaz->setName('kamaz');
$kamaz->add(ActionFactory::create('move'));
$kamaz->add(ActionFactory::create('stop'));
$kamaz->add(ActionFactory::create('emptyLoads'));
$kamaz->add(ActionFactory::create('move'));
$kamaz->add(ActionFactory::create('stop'));
$kamaz->add(ActionFactory::create('refuel'));
$kamaz->render();