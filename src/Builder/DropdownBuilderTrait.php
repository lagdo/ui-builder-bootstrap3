<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuItemComponent;

trait DropdownBuilderTrait
{
    /**
     * @return string
     */
    protected function _dropdownComponentClass(): string
    {
        return DropdownComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownItemComponentClass(): string
    {
        return DropdownItemComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownMenuComponentClass(): string
    {
        return DropdownMenuComponent::class;
    }

    /**
     * @return string
     */
    protected function _dropdownMenuItemComponentClass(): string
    {
        return DropdownMenuItemComponent::class;
    }
}
