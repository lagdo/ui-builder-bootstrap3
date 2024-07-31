<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait LayoutTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function row(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('row');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function col(int $width = 12, ...$arguments): BuilderInterface
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("col-md-$width");
        return $this;
    }
}
