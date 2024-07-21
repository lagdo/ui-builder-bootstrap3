<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

trait PaginationTrait
{
    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): self
    {
        $this->builder->createScope('ul', $arguments);
        $this->builder->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): self
    {
        $this->builder->createWrapper('li');
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(...$arguments): self
    {
        $this->builder->createWrapper('li', ['class' => 'active']);
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(...$arguments): self
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', $arguments);
        return $this;
    }
}
