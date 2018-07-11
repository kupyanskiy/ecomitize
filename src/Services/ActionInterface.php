<?php

namespace Ecomitize\Services;

interface ActionInterface
{
    public function render(): void;

    public function setParent(ActionInterface $parent): void;

    public function getParent(): ActionInterface;

    public function setName(string $name): void;

    public function getName(): string;

    public function setView(ViewInterface $view): void;

    public function getView(): ViewInterface;

    public function setFuel(FuelInterface $fuel): void;

    public function getFuel(): FuelInterface;
}