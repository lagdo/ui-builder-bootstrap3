<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait MenuTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function menu(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('list-group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuItem(...$arguments): BuilderInterface
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuActiveItem(...$arguments): BuilderInterface
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item active');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuDisabledItem(...$arguments): BuilderInterface
    {
        $this->builder->createScope('a', $arguments);
        $this->builder->prependClass('list-group-item disabled');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(...$arguments): BuilderInterface
    {
        $this->builder->createScope('ol', $arguments);
        $this->builder->prependClass('breadcrumb');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(bool $active, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('li', $arguments);
        if ($active) {
            $this->builder->prependClass('active');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdown(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('btn-group');
        $this->builder->setAttribute('role', 'group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(string $style = 'default', ...$arguments): BuilderInterface
    {
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass("btn btn-$style dropdown-toggle");
        $this->builder->setAttributes(['data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(...$arguments): BuilderInterface
    {
        $this->builder->createScope('ul', $arguments);
        $this->builder->prependClass('dropdown-menu');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(...$arguments): BuilderInterface
    {
        $this->builder->createWrapper('li');
        $this->builder->createScope('a', $arguments);
        $this->builder->setAttribute('href', '#');
        return $this;
    }
}
