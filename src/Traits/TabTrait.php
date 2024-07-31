<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait TabTrait
{
    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function tabNav(string $id = '', ...$arguments): BuilderInterface
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
    public function tabNavItem(string $target, bool $active = false, ...$arguments): BuilderInterface
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
    public function tabContent(...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('tab-content');
        $this->builder->setAttribute('style', 'margin-top:10px;');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($active ? 'tab-pane fade in active' : 'tab-pane fade in');
        $this->builder->setAttribute('id', $id);
        return $this;
    }
}
