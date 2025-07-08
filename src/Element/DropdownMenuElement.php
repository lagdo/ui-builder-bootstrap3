<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\DropdownMenuElement as BaseElement;

class DropdownMenuElement extends BaseElement
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('dropdown-menu');
    }
}
