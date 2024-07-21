<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

use function array_shift;
use function func_get_args;

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
    public function tabNav(string $id = ''): self
    {
        $this->createScope('ul', func_get_args());
        $this->prependClass('nav nav-pills');
        if (($id)) {
            $this->setAttributes(['id' => $id]);
        }
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(string $target, bool $active = false): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        array_shift($arguments);
        $this->createWrapper('li');
        if ($active) {
            $this->prependClass('active');
        }
        $this->setAttributes(['role' => 'presentation']);
        // Inner link
        $this->createScope('a', $arguments);
        $this->setAttributes(['data-toggle' => 'pill', 'href' => "#$target"]);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContent(): self
    {
        $this->createScope('div', func_get_args());
        $this->prependClass('tab-content');
        $this->setAttributes(['style' => 'margin-top:10px;']);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(string $id, bool $active = false): self
    {
        $arguments = func_get_args();
        array_shift($arguments);
        array_shift($arguments);
        $this->createScope('div', $arguments);
        $this->prependClass($active ? 'tab-pane fade in active' : 'tab-pane fade in');
        $this->setAttributes(['id' => $id]);
        return $this;
    }
}
