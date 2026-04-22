<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\MenuComponent as BaseComponent;

class MenuComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('list-group');
    }

    /**
     * @return static
     */
    public function vertical(): static
    {
        // Not implemented in Bootstrap 3.
        return $this;
    }

    /**
     * @return static
     */
    public function horizontal(): static
    {
        // Not implemented in Bootstrap 3.
        return $this;
    }
}
