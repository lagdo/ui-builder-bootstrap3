<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Builder\Html\Element;
use Lagdo\UiBuilder\Element\Html\CheckboxElement as BaseElement;
use Lagdo\UiBuilder\Element\Html\InputGroupElement;

class CheckboxElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->setAttribute('type', 'checkbox');
    }

    /**
     * @param Element $parent
     *
     * @return void
     */
    protected function onBuild(Element $parent): void
    {
        if (is_a($parent, InputGroupElement::class)) {
            $this->addWrapper('span', [
                'class' => 'input-group-addon',
                'style' => 'background-color:white;padding:8px;',
            ]);
        }
    }
}
