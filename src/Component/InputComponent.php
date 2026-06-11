<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\InputComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class InputComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->addBaseClass('form-control');
        }
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('form-label')->addChild($text);
        $this->prependSibling($label);
    }
}
