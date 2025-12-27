<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BreadcrumbElement;
use Lagdo\UiBuilder\Bootstrap3\Component\BreadcrumbItemElement;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownElement;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownItemElement;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuElement;
use Lagdo\UiBuilder\Bootstrap3\Component\DropdownMenuItemElement;
use Lagdo\UiBuilder\Bootstrap3\Component\MenuElement;
use Lagdo\UiBuilder\Bootstrap3\Component\MenuItemElement;
use Lagdo\UiBuilder\Component\BreadcrumbInterface;
use Lagdo\UiBuilder\Component\BreadcrumbItemInterface;
use Lagdo\UiBuilder\Component\DropdownInterface;
use Lagdo\UiBuilder\Component\DropdownItemInterface;
use Lagdo\UiBuilder\Component\DropdownMenuInterface;
use Lagdo\UiBuilder\Component\DropdownMenuItemInterface;
use Lagdo\UiBuilder\Component\MenuInterface;
use Lagdo\UiBuilder\Component\MenuItemInterface;

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
