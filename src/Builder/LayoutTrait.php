<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\ColComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RowComponent;

trait LayoutTrait
{
    /**
     * @inheritDoc
     */
    public function row(...$arguments): RowComponent
    {
        return $this->createElementOfClass(RowComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function col(...$arguments): ColComponent
    {
        return $this->createElementOfClass(ColComponent::class, $arguments);
    }
}
