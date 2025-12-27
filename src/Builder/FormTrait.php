<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\CheckboxElement;
use Lagdo\UiBuilder\Bootstrap3\Component\FormElement;
use Lagdo\UiBuilder\Bootstrap3\Component\InputGroupElement;
use Lagdo\UiBuilder\Bootstrap3\Component\OptionElement;
use Lagdo\UiBuilder\Bootstrap3\Component\RadioElement;
use Lagdo\UiBuilder\Component\CheckboxInterface;
use Lagdo\UiBuilder\Component\ElementInterface;
use Lagdo\UiBuilder\Component\FormInterface;
use Lagdo\UiBuilder\Component\InputGroupInterface;
use Lagdo\UiBuilder\Component\OptionInterface;
use Lagdo\UiBuilder\Component\RadioInterface;

trait FormTrait
{
    /**
     * @inheritDoc
     */
    public function form(...$arguments): FormInterface
    {
        return $this->createElementOfClass(FormElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function inputGroup(...$arguments): InputGroupInterface
    {
        return $this->createElementOfClass(InputGroupElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function checkbox(...$arguments): CheckboxInterface
    {
        return $this->createElementOfClass(CheckboxElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function radio(...$arguments): RadioInterface
    {
        return $this->createElementOfClass(RadioElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function option(...$arguments): OptionInterface
    {
        return $this->createElementOfClass(OptionElement::class, $arguments);
    }

    /**
     * @param string $tagName
     * @param array $arguments
     *
     * @return ElementInterface
     */
    protected function createFormElement(string $tagName, $arguments): ElementInterface
    {
        $element = $this->builder->createElement($tagName, $arguments);
        $element->addBaseClass($tagName === 'label' ? 'control-label' : 'form-control');
        return $element;
    }
}
