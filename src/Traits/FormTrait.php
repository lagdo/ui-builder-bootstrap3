<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use function rtrim;
use function ltrim;

trait FormTrait
{
    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function form(bool $horizontal = false, bool $wrapped = false, ...$arguments): self
    {
        if ($wrapped) {
            $this->builder->createWrapper('div', ['class' => 'portlet-body form']);
        }
        $this->builder->createScope('form', $arguments);
        if ($horizontal) {
            $this->builder->prependClass('form-horizontal');
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
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
