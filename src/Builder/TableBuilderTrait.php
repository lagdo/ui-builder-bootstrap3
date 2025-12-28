<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\TableComponent;

trait TableBuilderTrait
{
    /**
     * @return string
     */
    protected function _tableComponentClass(): string
    {
        return TableComponent::class;
    }
}
