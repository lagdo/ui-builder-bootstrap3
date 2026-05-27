<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait DropdownBuilderTrait
{
    /**
     * @return void
     */
    protected function initDropdownBuilder(): void
    {
        $this->dropdownComponentClass = Component\DropdownComponent::class;
        $this->dropdownButtonComponentClass = Component\DropdownButtonComponent::class;
        $this->dropdownMenuComponentClass = Component\DropdownMenuComponent::class;
        $this->dropdownMenuItemComponentClass = Component\DropdownMenuItemComponent::class;
    }
}
