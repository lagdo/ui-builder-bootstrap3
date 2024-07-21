<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function func_get_args;

trait PaginationTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function pagination(): self
    {
        $this->builder->createScope('ul', func_get_args());
        $this->builder->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(): self
    {
        $this->builder->createWrapper('li');
        $this->builder->createScope('a', func_get_args());
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(): self
    {
        $this->builder->createWrapper('li', ['class' => 'active']);
        $this->builder->createScope('a', func_get_args());
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(): self
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', func_get_args());
        return $this;
    }
}
