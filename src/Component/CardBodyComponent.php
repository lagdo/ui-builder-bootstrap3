<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\CardBodyComponent as BaseComponent;

class CardBodyComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('panel-body');
    }
}
