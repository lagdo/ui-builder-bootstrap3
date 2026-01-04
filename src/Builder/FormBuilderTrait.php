<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\CheckboxComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\FormComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\InputGroupComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\LabelComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\OptionComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RadioComponent;
use Lagdo\UiBuilder\Component\HtmlComponent;

trait FormBuilderTrait
{
    /**
     * @return void
     */
    protected function _initFormBuilder(): void
    {
        $this->formComponentClass = FormComponent::class;
        $this->labelComponentClass = LabelComponent::class;
        $this->inputGroupComponentClass = InputGroupComponent::class;
        $this->checkboxComponentClass = CheckboxComponent::class;
        $this->radioComponentClass = RadioComponent::class;
        $this->optionComponentClass = OptionComponent::class;
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return HtmlComponent
     */
    protected function createFormComponent(string $tagName, $arguments): HtmlComponent
    {
        $component = $this->createComponent($tagName, $arguments);
        $component->element()->addBaseClass($tagName === 'label' ? 'control-label' : 'form-control');
        return $component;
    }
}
