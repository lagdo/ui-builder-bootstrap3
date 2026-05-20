<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\GridRowComponent as BaseComponent;

class GridRowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('row');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->element()->addBaseClass('form-group');
        }
    }
}
