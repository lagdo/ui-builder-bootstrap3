<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'a';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('data-toggle', 'tab');
        $this->addWrapper($this->newElement('li'));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->wrapper(0)->addClass('active');
        }
        if (!$this->prop('enabled', true)) {
            $this->wrapper(0)?->addClass('disabled');
        }
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->element()->setAttribute('href', "#$target");
        return $this;
    }
}
