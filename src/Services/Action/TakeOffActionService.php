<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class TakeOffAction
 *
 * @package Ecomitize\Services\Action
 */
class TakeOffActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' took off');
    }
}