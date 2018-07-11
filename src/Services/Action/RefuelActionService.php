<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class RefuelAction
 *
 * @package Ecomitize\Services\Action
 */
class RefuelActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' refuel '.$this->getParent()->getFuel());
    }
}