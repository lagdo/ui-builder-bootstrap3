<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PaginationItemComponent;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function _initPaginationBuilder(): void
    {
        $this->paginationComponentClass = PaginationComponent::class;
        $this->paginationItemComponentClass = PaginationItemComponent::class;
    }
}
