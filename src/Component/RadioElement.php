<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\RadioElement as BaseElement;

class RadioElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->setAttribute('type', 'radio');
    }
}
