<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class EmptyLoadsAction
 *
 * @package Ecomitize\Services\Action
 */
class EmptyLoadsActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' empty loads');
    }
}