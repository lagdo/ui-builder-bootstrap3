<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\FormElement as BaseElement;

class FormElement extends BaseElement
{
    /**
     * @inheritDoc
     */
    public function horizontal(bool $horizontal = true): static
    {
        $horizontal && $this->addBaseClass('form-horizontal');
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
