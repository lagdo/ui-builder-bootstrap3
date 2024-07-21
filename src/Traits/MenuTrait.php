<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

trait MenuTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function menu(): self
    {
        $this->createScope('div', func_get_args());
        $this->prependClass('list-group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuItem(): self
    {
        $this->createScope('a', func_get_args());
        $this->prependClass('list-group-item');
        $this->setAttributes(['href' => 'javascript:void(0)']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuActiveItem(): self
    {
        $this->createScope('a', func_get_args());
        $this->prependClass('list-group-item active');
        $this->setAttributes(['href' => 'javascript:void(0)']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function menuDisabledItem(): self
    {
        $this->createScope('a', func_get_args());
        $this->prependClass('list-group-item disabled');
        $this->setAttributes(['href' => 'javascript:void(0)']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumb(): self
    {
        $this->createScope('ol', func_get_args());
        $this->prependClass('breadcrumb');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function breadcrumbItem(bool $active): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        $this->createScope('li', $arguments);
        if ($active) {
            $this->prependClass('active');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdown(): self
    {
        $this->createScope('div', func_get_args());
        $this->prependClass('btn-group');
        $this->setAttributes(['role' => 'group']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownItem(string $style = 'default'): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        $this->createScope('button', $arguments);
        $this->prependClass("btn btn-$style dropdown-toggle");
        $this->setAttributes(['data-toggle' => 'dropdown', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenu(): self
    {
        $this->createScope('ul', func_get_args());
        $this->prependClass('dropdown-menu');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function dropdownMenuItem(): self
    {
        $this->createWrapper('li');
        $this->createScope('a', func_get_args());
        $this->setAttributes(['href' => '#']);
        return $this;
    }
}
