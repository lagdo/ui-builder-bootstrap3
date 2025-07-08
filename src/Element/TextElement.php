<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Builder\Html\Element;
use Lagdo\UiBuilder\Element\Html\InputGroupElement;
use Lagdo\UiBuilder\Element\Html\TextElement as BaseElement;

use function is_a;

class TextElement extends BaseElement
{
    /**
     * @param Element $parent
     *
     * @return void
     */
    protected function onBuild(Element $parent): void
    {
        // A label in an input group must be wrapped into a span with class "input-group-addon".
        if (is_a($parent, InputGroupElement::class)) {
            $this->addWrapper('span', ['class' => 'input-group-addon']);
        }
    }
}
