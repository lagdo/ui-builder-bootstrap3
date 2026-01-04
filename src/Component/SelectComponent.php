<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\SelectComponent as BaseComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

class SelectComponent extends BaseComponent
{
    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if ($this->inForm()) {
            $this->element()->addBaseClass('form-control');
        }
    }
}
