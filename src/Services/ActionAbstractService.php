<?php

namespace Ecomitize\Services;

/**
 * Class ActionAbstractService
 *
 * @package Ecomitize\Services\Action
 */
abstract class ActionAbstractService implements ActionInterface
{
    /**
     * @var ViewInterface
     */
    private $view;

    /**
     * @var FuelInterface
     */
    private $fuel;

    /**
     * @var string
     */
    private $name;

    /**
     * @var ActionInterface
     */
    protected $parent;

    public abstract function render(): void;

    /**
     * @param ViewInterface $view
     */
    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    /**
     * @return ViewInterface
     */
    public function getView(): ViewInterface
    {
        return $this->view;
    }

    /**
     * @param FuelInterface $fuel
     */
    public function setFuel(FuelInterface $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return FuelInterface
     */
    public function getFuel(): FuelInterface
    {
        return $this->fuel;
    }

    /**
     * @param ActionInterface $parent
     */
    public function setParent(ActionInterface $parent): void
    {
        $this->parent = $parent;
        $this->fuel = $parent->getFuel();
        $this->view = $parent->getView();
    }

    /**
     * @return ActionInterface
     */
    public function getParent(): ActionInterface
    {
        return $this->parent;
    }

    /**
     * @param string $name
     *
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}