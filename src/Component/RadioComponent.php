<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\RadioComponent as BaseComponent;
use Lagdo\UiBuilder\Html\HtmlElement;
use Lagdo\UiBuilder\Html\Element\Text;

class RadioComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'radio');
    }

    /**
     * @inheritDoc
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('form-label')->addChild($text);
        $this->appendSibling($label);
    }
}
