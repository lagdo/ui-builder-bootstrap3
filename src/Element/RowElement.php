<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\RowElement as BaseElement;

class RowElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('row');
    }
}
