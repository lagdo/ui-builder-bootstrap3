<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

trait LayoutTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function row(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('row');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function col(int $width = 12, ...$arguments): self
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("col-md-$width");
        return $this;
    }
}
