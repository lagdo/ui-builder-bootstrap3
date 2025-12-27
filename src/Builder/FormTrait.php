<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\CheckboxComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\FormComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\InputGroupComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\OptionComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RadioComponent;
use Lagdo\UiBuilder\Component\Base\HtmlComponent;

trait FormTrait
{
    /**
     * @inheritDoc
     */
    public function form(...$arguments): FormComponent
    {
        return $this->createElementOfClass(FormComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function inputGroup(...$arguments): InputGroupComponent
    {
        return $this->createElementOfClass(InputGroupComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function checkbox(...$arguments): CheckboxComponent
    {
        return $this->createElementOfClass(CheckboxComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function radio(...$arguments): RadioComponent
    {
        return $this->createElementOfClass(RadioComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function option(...$arguments): OptionComponent
    {
        return $this->createElementOfClass(OptionComponent::class, $arguments);
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return HtmlComponent
     */
    protected function createFormComponent(string $tagName, $arguments): HtmlComponent
    {
        $element = $this->builder->createElement($tagName, $arguments);
        $element->addBaseClass($tagName === 'label' ? 'control-label' : 'form-control');
        return $element;
    }
}
