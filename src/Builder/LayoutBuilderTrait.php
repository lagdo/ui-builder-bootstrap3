<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RowComponent;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function _initLayoutBuilder(): void
    {
        $this->rowComponentClass = RowComponent::class;
        $this->colComponentClass = ColComponent::class;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): RowComponent
    {
        $component = $this->row(...$arguments);
        $component->element()->addBaseClass('form-group');
        return $component;
    }
}
