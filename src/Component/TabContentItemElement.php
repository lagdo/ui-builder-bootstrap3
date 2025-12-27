<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\TabContentItemElement as BaseElement;

class TabContentItemElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('tab-pane fade');
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active = false): static
    {
        $active && $this->addBaseClass('in active');
        return $this;
    }
}
