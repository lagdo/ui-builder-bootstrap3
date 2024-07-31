<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait PaginationTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function pagination(...$arguments): BuilderInterface
    {
        $this->builder->createScope('ul', $arguments);
        $this->builder->prependClass('pagination');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li');
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'active']);
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', $arguments);
        return $this;
    }
}
