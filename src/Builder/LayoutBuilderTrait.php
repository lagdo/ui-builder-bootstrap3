<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function initLayoutBuilder(): void
    {
        $this->rowComponentClass = Component\GridRowComponent::class;
        $this->colComponentClass = Component\GridColComponent::class;
    }
}
