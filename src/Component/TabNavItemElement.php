<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\TabNavItemElement as BaseElement;

class TabNavItemElement extends BaseElement
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
        $this->setAttribute('data-toggle', 'tab');
        $this->addWrapper('li');
    }

    /**
     * @param string $target
     *
     * @return static
     */
    public function target(string $target): static
    {
        $this->setAttribute('href', "#$target");
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $active && $this->setWrapperClass(0, 'active');
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        !$enabled && $this->setWrapperClass(0, 'disabled');
        return $this;
    }
}
