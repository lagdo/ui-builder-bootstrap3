<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\ButtonGroupElement as BaseElement;

class ButtonGroupElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn-group');
        $this->setAttribute('role', 'group');
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->addClass('btn-group-justified');
        return $this;
    }
}
