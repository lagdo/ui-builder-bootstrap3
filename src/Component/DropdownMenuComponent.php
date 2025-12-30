<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
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
        $this->element()->addBaseClass('dropdown-menu');
    }
}
