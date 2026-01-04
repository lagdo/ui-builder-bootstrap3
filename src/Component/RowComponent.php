<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\RowComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

class RowComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('row');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if ($this->inForm()) {
            $this->element()->addBaseClass('form-group');
        }
    }
}
