<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\TableComponent;

trait TableBuilderTrait
{
    /**
     * @return void
     */
    protected function _initTableBuilder(): void
    {
        $this->tableComponentClass = TableComponent::class;
    }
}
