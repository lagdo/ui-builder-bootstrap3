<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\FormComponent as BaseComponent;

class FormComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    public function horizontal(bool $horizontal = true): static
    {
        $horizontal && $this->element()->addBaseClass('form-horizontal');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function wrapped(bool $wrapped = true): static
    {
        $wrapped && $this->addWrapper('div', ['class' => 'portlet-body form']);
        return $this;
    }
}
