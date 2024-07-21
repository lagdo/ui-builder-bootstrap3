<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

trait PanelTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function panel(string $style = 'default'): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("panel panel-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('panel-heading');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelBody(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('panel-body');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(): self
    {
        $this->builder->createScope('div', func_get_args());
        $this->builder->prependClass('panel-footer');
        return $this;
    }
}
