<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class SwimAction
 *
 * @package Ecomitize\Services\Action
 */
class SwimActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' swimming');
    }
}