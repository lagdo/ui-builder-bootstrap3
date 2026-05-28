<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\DropdownMenuComponent as BaseComponent;

class DropdownMenuComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('dropdown-menu');
    }
}
