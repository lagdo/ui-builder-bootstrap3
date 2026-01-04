<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait LayoutBuilderTrait
{
    /**
     * @return void
     */
    protected function _initLayoutBuilder(): void
    {
        $this->rowComponentClass = Component\RowComponent::class;
        $this->colComponentClass = Component\ColComponent::class;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): Component\RowComponent
    {
        $component = $this->row(...$arguments);
        $component->element()->addBaseClass('form-group');
        return $component;
    }
}
