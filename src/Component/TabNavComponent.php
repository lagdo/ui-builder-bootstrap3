<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
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
        $this->addBaseClass('nav');
        $this->addBaseClass('nav-tabs');
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function look(string $style): static
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
