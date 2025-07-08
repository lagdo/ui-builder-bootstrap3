<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\TabContentElement as BaseElement;

class TabContentElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('tab-content');
    }
}
