<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\DropdownMenuItemElement as BaseElement;

class DropdownMenuItemElement extends BaseElement
{
    /**
     * @var string
     */
    public static string $tag = 'a';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->setAttribute('href', '#');
        $this->addWrapper('li');
    }
}
