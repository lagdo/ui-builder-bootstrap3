<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\ButtonElement as BaseElement;
use Lagdo\UiBuilder\Builder\Html\Element;

use function is_a;

class ButtonElement extends BaseElement
{
    /**
     * @var bool
     */
    private bool $fullWidth = false;

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->prependClass('btn');
        $this->setAttribute('type', 'button');
    }

    /**
     * @param Element $parent
     *
     * @return void
     */
    protected function onBuild(Element $parent): void
    {
        if ($this->fullWidth && !is_a($parent, ButtonGroupElement::class)) {
            $this->appendClass('btn-block');
        }
        // A button in an input group must be wrapped into a div with class "input-group-btn".
        if (is_a($parent, InputGroupElement::class)) {
            $this->addWrapper('div', ['class' => 'input-group-btn']);
        }
    }

    /**
     * @inheritDoc
     */
    public function addIcon(string $icon): static
    {
        $this->addHtml('<span class="glyphicon glyphicon-' . $icon . '" aria-hidden="true" />');
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addCaret(): static
    {
        $this->addHtml('<span class="caret" />');
        return $this;
    }

    /**
     * @return static
     */
    public function primary(): static
    {
        $this->appendClass('btn-primary');
        return $this;
    }

    /**
     * @return static
     */
    public function secondary(): static
    {
        $this->appendClass('btn-default');
        return $this;
    }

    /**
     * @return static
     */
    public function large(): static
    {
        $this->appendClass('btn-lg');
        return $this;
    }

    /**
     * @return static
     */
    public function small(): static
    {
        $this->appendClass('btn-xs');
        return $this;
    }

    /**
     * @return static
     */
    public function success(): static
    {
        $this->appendClass('btn-success');
        return $this;
    }

    /**
     * @return static
     */
    public function info(): static
    {
        $this->appendClass('btn-info');
        return $this;
    }

    /**
     * @return static
     */
    public function warning(): static
    {
        $this->appendClass('btn-warning');
        return $this;
    }

    /**
     * @return static
     */
    public function danger(): static
    {
        $this->appendClass('btn-danger');
        return $this;
    }

    /**
     * @return static
     */
    public function outline(): static
    {
        // Not implemented.
        return $this;
    }

    /**
     * @return static
     */
    public function fullWidth(): static
    {
        $this->fullWidth = true;
        return $this;
    }
}
