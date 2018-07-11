<?php

namespace Ecomitize\Services\Vehicle;

use Ecomitize\Services\ActionAbstractService;
use Ecomitize\Services\ActionInterface;

/**
 * Class VehicleService
 *
 * @package Ecomitize\Services
 */
class VehicleService extends ActionAbstractService
{
    /**
     * @var ActionInterface[]
     */
    private $action = [];

    /**
     * @param ActionInterface $action
     */
    public function add(ActionInterface $action) :void
    {
        $action->setParent($this);
        $this->action[] = $action;
    }

    public function clear() :void
    {
        $this->action = [];
    }

    public function render(): void
    {
        foreach ($this->action as $action) {
            $action->render();
        }
    }
}