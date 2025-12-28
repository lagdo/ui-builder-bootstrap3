<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RowComponent;

trait LayoutBuilderTrait
{
    /**
     * @return string
     */
    protected function _rowComponentClass(): string
    {
        return RowComponent::class;
    }

    /**
     * @return string
     */
    protected function _colComponentClass(): string
    {
        return ColComponent::class;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): RowComponent
    {
        $element = $this->row(...$arguments);
        $element->addBaseClass('form-group');
        return $element;
    }
}
