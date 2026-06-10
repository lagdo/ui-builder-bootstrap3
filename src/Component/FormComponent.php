<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\FormComponent as BaseComponent;

class FormComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    public function wrapped(): static
    {
        $this->addWrapper($this->newElement('div', ['class' => 'portlet-body form']));
        return $this;
    }
}
