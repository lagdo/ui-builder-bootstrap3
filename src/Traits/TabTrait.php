<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

trait TabTrait
{
    abstract protected function createScope(string $name, array $arguments = []): self;

    abstract protected function createWrapper(string $name, array $arguments = []): self;

    abstract protected function prependClass(string $class): self;

    abstract protected function setAttributes(array $attributes): self;

    abstract public function end(): self;

    /**
     * @inheritDoc
     */
    public function tabNav(string $id = '', ...$arguments): self
    {
        $this->builder->createScope('ul', [$id, ...$arguments]);
        $this->builder->prependClass('nav nav-pills');
        if (($id)) {
            $this->builder->setAttribute('id', $id);
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(string $target, bool $active = false, ...$arguments): self
    {
        $this->builder->createWrapper('li');
        if ($active) {
            $this->builder->prependClass('active');
        }
        $this->builder->setAttribute('role', 'presentation');
        // Inner link
        $this->builder->createScope('a', $arguments);
        $this->builder->setAttributes(['data-toggle' => 'pill', 'href' => "#$target"]);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('tab-content');
        $this->builder->setAttribute('style', 'margin-top:10px;');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false, ...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($active ? 'tab-pane fade in active' : 'tab-pane fade in');
        $this->builder->setAttribute('id', $id);
        return $this;
    }
}
