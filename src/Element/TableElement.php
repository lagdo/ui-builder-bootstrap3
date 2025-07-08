<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\TableElement as BaseElement;

class TableElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('table');
    }

    /**
     * @param bool $responsive
     *
     * @return static
     */
    public function responsive(bool $responsive = true): static
    {
        $responsive && $this->addWrapper('div', ['class' => 'table-responsive']);
        return $this;
    }

    /**
     * @param string $style
     *
     * @return static
     */
    public function style(string $style): static
    {
        $this->addClass("table-$style");
        return $this;
    }
}
