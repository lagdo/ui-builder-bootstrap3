<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\PaginationComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PaginationItemComponent;

trait PaginationTrait
{
    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): PaginationComponent
    {
        return $this->createElementOfClass(PaginationComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): PaginationItemComponent
    {
        return $this->createElementOfClass(PaginationItemComponent::class, $arguments);
    }
}
