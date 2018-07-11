<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class StopAction
 *
 * @package Ecomitize\Services\Action
 */
class StopActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' stopping');
    }
}