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
     * @param string $style
     *
     * @return static
     */
    public function skin(string $style): static
    {
        $this->element()->addClass("table-$style");
        return $this;
    }
}
