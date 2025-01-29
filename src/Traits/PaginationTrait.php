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
    public function paginationItem(int $nPageNumber, ...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['data-page' => $nPageNumber]);
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationActiveItem(int $nPageNumber, ...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'active', 'data-page' => $nPageNumber]);
        $this->builder->createScope('a', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function paginationDisabledItem(int $nPageNumber, ...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li', ['class' => 'disabled']);
        $this->builder->createScope('span', $arguments);
        return $this;
    }
}
