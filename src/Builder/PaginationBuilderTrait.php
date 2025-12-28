<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return string
     */
    protected function _paginationComponentClass(): string
    {
        return PaginationComponent::class;
    }

    /**
     * @return string
     */
    protected function _paginationItemComponentClass(): string
    {
        return PaginationItemComponent::class;
    }
}
