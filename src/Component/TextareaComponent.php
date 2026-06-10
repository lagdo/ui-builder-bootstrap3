<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\TextareaComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class TextareaComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->element()->addBaseClass('form-control');
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
