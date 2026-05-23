<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\CardHeaderComponent as BaseComponent;

class CardHeaderComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('panel-heading');
    }
}
