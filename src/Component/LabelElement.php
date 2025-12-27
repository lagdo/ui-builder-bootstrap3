<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Builder\Html\Element;
use Lagdo\UiBuilder\Component\Html\InputGroupElement;
use Lagdo\UiBuilder\Component\Html\LabelElement as BaseElement;

use function is_a;

class LabelElement extends BaseElement
{
    /**
     * @param Element $parent
     *
     * @return void
     */
    public function onBuild(Element $parent): void
    {
        // A label in an input group must be wrapped into a span with class "input-group-addon".
        if (is_a($parent, InputGroupElement::class)) {
            $this->addWrapper('span', ['class' => 'input-group-addon']);
        }
    }
}
