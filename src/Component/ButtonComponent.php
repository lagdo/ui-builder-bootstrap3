<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Base\ButtonComponent as BaseComponent;

use function is_a;

class ButtonComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('btn');
        $this->element()->setAttribute('type', 'button');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $type = $this->prop('alert') ?? $this->prop('visual', null);
        if ($type === null || $type === VisualEnum::SECONDARY) {
            $type = VisualEnum::DEFAULT;
        }
        $this->element()->addBaseClass("btn-{$type->value}");

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->element()->addClass('btn-lg');
            break;
        case SizeEnum::SMALL:
            $this->element()->addClass('btn-xs');
            break;
        default:
        }

        $parent = $this->parent();
        if ($this->prop('fullWidth', false) && !is_a($parent, ButtonGroupComponent::class)) {
            $this->element()->addClass('btn-block');
        }

        // A button in an input group must be wrapped into a div with class "input-group-btn".
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('div', ['class' => 'input-group-btn']));
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
}
