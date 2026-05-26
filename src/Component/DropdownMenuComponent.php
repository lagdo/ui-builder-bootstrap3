<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @return string
     */
    protected function tagName(): string
    {
        return 'ul';
    }

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('dropdown-menu');
    }
}
