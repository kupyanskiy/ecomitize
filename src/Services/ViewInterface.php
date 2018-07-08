<?php

namespace Ecomitize\Services;

/**
 * Interface ViewInterface
 *
 * @package Ecomitize\Services
 */
interface ViewInterface
{
    public function render(string $message) :void;
}