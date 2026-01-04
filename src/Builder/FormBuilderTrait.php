<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait FormBuilderTrait
{
    /**
     * @return void
     */
    protected function _initFormBuilder(): void
    {
        $this->formComponentClass = Component\FormComponent::class;
        $this->labelComponentClass = Component\LabelComponent::class;
        $this->inputComponentClass = Component\InputComponent::class;
        $this->textareaComponentClass = Component\TextareaComponent::class;
        $this->checkboxComponentClass = Component\CheckboxComponent::class;
        $this->radioComponentClass = Component\RadioComponent::class;
        $this->selectComponentClass = Component\SelectComponent::class;
        $this->optionComponentClass = Component\OptionComponent::class;
        $this->inputGroupComponentClass = Component\InputGroupComponent::class;
    }
}
