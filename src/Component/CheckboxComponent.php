<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\Base\InputGroupComponent;
use Lagdo\UiBuilder\Component\HtmlElement;
use Lagdo\UiBuilder\Component\Html\Text;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('span', [
                'class' => 'input-group-addon',
                'style' => 'background-color:white;padding:8px;',
            ]));
        }
    }

    /**
     * @param HtmlElement $label
     * @param Text $text
     *
     * @return void
     */
    protected function setLabel(HtmlElement $label, Text $text): void
    {
        $label->addBaseClass('form-label')->addChild($text);
        $this->addNextSibling($label);
    }
}
