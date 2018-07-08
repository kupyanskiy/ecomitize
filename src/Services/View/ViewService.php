<?php

namespace Ecomitize\Services\View;

use Ecomitize\Services\ViewInterface;

/**
 * Class ViewService
 *
 * @package Ecomitize\Services
 */
class ViewService implements ViewInterface
{
    /**
     * @param string $message
     * @param string $delimiter
     */
    public function render(string $message, string $delimiter = '<br/>'): void
    {
        echo sprintf('%s%s', $message, $delimiter);
    }
}