<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\CardComponent as BaseComponent;

class CardComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('panel');
    }
}
