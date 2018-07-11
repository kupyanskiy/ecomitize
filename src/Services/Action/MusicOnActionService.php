<?php

namespace Ecomitize\Services\Action;

use Ecomitize\Services\ActionAbstractService;

/**
 * Class MusicOnAction
 *
 * @package Ecomitize\Services\Action
 */
class MusicOnActionService extends ActionAbstractService
{
    public function render(): void
    {
        $this->getView()->render($this->getParent()->getName().' music switched on');
    }
}