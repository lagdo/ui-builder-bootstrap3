<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\CheckboxComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\FormComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\InputGroupComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\LabelComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\OptionComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RadioComponent;
use Lagdo\UiBuilder\Component\Base\HtmlComponent;

trait FormBuilderTrait
{
    /**
     * @return string
     */
    protected function _formComponentClass(): string
    {
        return FormComponent::class;
    }

    /**
     * @return string
     */
    protected function _labelComponentClass(): string
    {
        return LabelComponent::class;
    }

    /**
     * @return string
     */
    protected function _inputGroupComponentClass(): string
    {
        return InputGroupComponent::class;
    }

    /**
     * @return string
     */
    protected function _checkboxComponentClass(): string
    {
        return CheckboxComponent::class;
    }

    /**
     * @return string
     */
    protected function _radioComponentClass(): string
    {
        return RadioComponent::class;
    }

    /**
     * @return string
     */
    protected function _optionComponentClass(): string
    {
        return OptionComponent::class;
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return HtmlComponent
     */
    protected function createFormComponent(string $tagName, $arguments): HtmlComponent
    {
        $component = $this->builder->createComponent($tagName, $arguments);
        $component->element()->addBaseClass($tagName === 'label' ? 'control-label' : 'form-control');
        return $component;
    }
}
