<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;
use function rtrim;
use function ltrim;

trait FormTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function form(bool $horizontal = false, bool $wrapped = false): self
    {
        if ($wrapped) {
            $this->builder->createWrapper('div', ['class' => 'portlet-body form']);
        }
        $arguments = func_get_args();
        array_shift($arguments);
        array_shift($arguments);
        $this->builder->createScope('form', $arguments);
        if ($horizontal) {
            $this->builder->prependClass('form-horizontal');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRow(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('form-group');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRowClass(string $class = ''): string
    {
        return rtrim('form-group ' . ltrim($class));
    }

    /**
     * @inheritDoc
     */
    protected function _formTagClass(string $tagName): string
    {
        if ($tagName === 'label') {
            return 'control-label';
        }
        return 'form-control';
    }
}
