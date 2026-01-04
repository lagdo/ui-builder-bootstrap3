<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\DropdownComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownItemComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuItemComponent;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function _initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = DropdownComponent::class;
        $this->dropdownItemComponentClass = DropdownItemComponent::class;
        $this->dropdownMenuComponentClass = DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = DropdownMenuItemComponent::class;
    }
}
