<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\DropdownElement as BaseElement;

class DropdownElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('btn-group');
        $this->setAttribute('role', 'group');
    }
}
