<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait PaginationBuilderTrait
{
    /**
     * @return void
     */
    protected function initPaginationBuilder(): void
    {
        $this->paginationComponentClass = Component\PaginationComponent::class;
        $this->paginationItemComponentClass = Component\PaginationItemComponent::class;
    }
}
