<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait PanelTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function panel(string $style = 'default', ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass("panel panel-$style");
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-heading');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-body');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('panel-footer');
        return $this;
    }
}
