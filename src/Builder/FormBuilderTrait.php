<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;
use Lagdo\UiBuilder\Component\HtmlComponent;

trait FormBuilderTrait
{
    /**
     * @return void
     */
    protected function _initFormBuilder(): void
    {
        $this->formComponentClass = Component\FormComponent::class;
        $this->labelComponentClass = Component\LabelComponent::class;
        $this->inputGroupComponentClass = Component\InputGroupComponent::class;
        $this->checkboxComponentClass = Component\CheckboxComponent::class;
        $this->radioComponentClass = Component\RadioComponent::class;
        $this->optionComponentClass = Component\OptionComponent::class;
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
