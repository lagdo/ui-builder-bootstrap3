<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\DropdownItemElement as BaseElement;

class DropdownItemElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->setAttributes(['data-toggle' => 'dropdown',
            'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
    }
}
