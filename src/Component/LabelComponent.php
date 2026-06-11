<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\InputGroupComponent;
use Lagdo\UiBuilder\Component\LabelComponent as BaseComponent;

use function is_a;

class LabelComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->inForm()) {
            $this->addBaseClass('control-label');
        }

        // A label in an input group must be wrapped into a span with class "input-group-addon".
        if (is_a($this->parent(), InputGroupComponent::class)) {
            $this->addWrapper($this->newElement('span', ['class' => 'input-group-addon']));
        }
    }
}
