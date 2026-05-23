<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\CardFooterComponent as BaseComponent;

class CardFooterComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('panel-footer');
    }
}
