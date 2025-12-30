<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\HtmlComponent;
use Lagdo\UiBuilder\Component\CheckboxComponent as BaseComponent;
use Lagdo\UiBuilder\Component\InputGroupComponent;

class CheckboxComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->setAttribute('type', 'checkbox');
    }

    /**
     * @param HtmlComponent $parent
     *
     * @return void
     */
    protected function onBuild(HtmlComponent $parent): void
    {
        if (is_a($parent, InputGroupComponent::class)) {
            $this->addWrapper('span', [
                'class' => 'input-group-addon',
                'style' => 'background-color:white;padding:8px;',
            ]);
        }
    }
}
