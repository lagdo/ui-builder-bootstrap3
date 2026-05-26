<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\FormComponent as BaseComponent;

class FormComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    public function horizontal(): static
    {
        $this->element()->addBaseClass('form-horizontal');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function wrapped(): static
    {
        $this->addWrapper($this->newElement('div', ['class' => 'portlet-body form']));
        return $this;
    }
}
