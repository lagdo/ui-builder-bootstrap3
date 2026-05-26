<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\TableComponent as BaseComponent;

class TableComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('table');
    }

    /**
     * @return static
     */
    public function responsive(): static
    {
        $this->addWrapper($this->newElement('div', ['class' => 'table-responsive']));
        return $this;
    }

    /**
     * @return static
     */
    public function stripe(): static
    {
        $this->element()->addClass('table-striped');
        return $this;
    }

    /**
     * @return static
     */
    public function border(): static
    {
        $this->element()->addClass('table-bordered');
        return $this;
    }

    /**
     * @return static
     */
    public function hover(): static
    {
        $this->element()->addClass('table-hover');
        return $this;
    }
}
