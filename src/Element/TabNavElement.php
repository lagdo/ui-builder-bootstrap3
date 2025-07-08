<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\TabNavElement as BaseElement;

class TabNavElement extends BaseElement
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('nav');
        $this->prependClass('nav-tabs');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        // Replace the second class.
        $this->classes[0][1] = 'nav-' . trim($style);
        return $this;
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        // Replace the second class.
        $this->classes[0][2] = 'nav-pills nav-stacked';
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        // Replace the second class.
        $this->classes[0][2] = 'nav-justified';
        return $this;
    }

    /**
     * @param string $justify
     *
     * @return static
     */
    public function justify(string $justify): static
    {
        return $this;
    }
}
