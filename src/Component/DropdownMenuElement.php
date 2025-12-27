<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Html\DropdownMenuElement as BaseElement;

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
