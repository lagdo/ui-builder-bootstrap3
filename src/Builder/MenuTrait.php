<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Element\BreadcrumbElement;
use Lagdo\UiBuilder\Bootstrap3\Element\BreadcrumbItemElement;
use Lagdo\UiBuilder\Bootstrap3\Element\DropdownElement;
use Lagdo\UiBuilder\Bootstrap3\Element\DropdownItemElement;
use Lagdo\UiBuilder\Bootstrap3\Element\DropdownMenuElement;
use Lagdo\UiBuilder\Bootstrap3\Element\DropdownMenuItemElement;
use Lagdo\UiBuilder\Bootstrap3\Element\MenuElement;
use Lagdo\UiBuilder\Bootstrap3\Element\MenuItemElement;
use Lagdo\UiBuilder\Element\BreadcrumbInterface;
use Lagdo\UiBuilder\Element\BreadcrumbItemInterface;
use Lagdo\UiBuilder\Element\DropdownInterface;
use Lagdo\UiBuilder\Element\DropdownItemInterface;
use Lagdo\UiBuilder\Element\DropdownMenuInterface;
use Lagdo\UiBuilder\Element\DropdownMenuItemInterface;
use Lagdo\UiBuilder\Element\MenuInterface;
use Lagdo\UiBuilder\Element\MenuItemInterface;

trait MenuTrait
{
    /**
     * @inheritDoc
     */
    public function menu(...$arguments): MenuInterface
    {
        return $this->createElementOfClass(MenuElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function menuItem(...$arguments): MenuItemInterface
    {
        return $this->createElementOfClass(MenuItemElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(...$arguments): BreadcrumbInterface
    {
        return $this->createElementOfClass(BreadcrumbElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(...$arguments): BreadcrumbItemInterface
    {
        return $this->createElementOfClass(BreadcrumbItemElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdown(...$arguments): DropdownInterface
    {
        return $this->createElementOfClass(DropdownElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(...$arguments): DropdownItemInterface
    {
        return $this->createElementOfClass(DropdownItemElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(...$arguments): DropdownMenuInterface
    {
        return $this->createElementOfClass(DropdownMenuElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(...$arguments): DropdownMenuItemInterface
    {
        return $this->createElementOfClass(DropdownMenuItemElement::class, $arguments);
    }
}
