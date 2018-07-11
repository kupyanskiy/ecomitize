<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class MoveAction
 *
 * @package Ecomitize\Services\Action
 */
class MoveActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' moving');
    }
}