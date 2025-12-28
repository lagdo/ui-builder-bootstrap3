<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BreadcrumbComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\BreadcrumbItemComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\MenuComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\MenuItemComponent;

trait MenuBuilderTrait
{
    /**
     * @return string
     */
    protected function _menuComponentClass(): string
    {
        return MenuComponent::class;
    }

    /**
     * @return string
     */
    protected function _menuItemComponentClass(): string
    {
        return MenuItemComponent::class;
    }

    /**
     * @return string
     */
    protected function _breadcrumbComponentClass(): string
    {
        return BreadcrumbComponent::class;
    }

    /**
     * @return string
     */
    protected function _breadcrumbItemComponentClass(): string
    {
        return BreadcrumbItemComponent::class;
    }
}
