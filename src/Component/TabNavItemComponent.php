<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\TabNavItemComponent as BaseComponent;

class TabNavItemComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('data-toggle', 'tab');
        $this->addWrapper($this->newElement('li'));
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

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        if ($active) {
            $this->wrapper(0)?->addClass('active');
        }
        return $this;
    }

    /**
     * @return static
     */
    public function disable(): static
    {
        $this->wrapper(0)?->addClass('disabled');
        return $this;
    }
}
