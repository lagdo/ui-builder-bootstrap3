<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

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
    public function panel(string $style = 'default', ...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("panel panel-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-heading');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-body');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-footer');
        return $this;
    }
}
