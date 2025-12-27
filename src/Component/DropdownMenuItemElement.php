<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\DropdownMenuItemElement as BaseElement;

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
