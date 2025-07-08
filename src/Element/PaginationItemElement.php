<?php

namespace Lagdo\UiBuilder\Bootstrap3\Element;

use Lagdo\UiBuilder\Element\Html\PaginationItemElement as BaseElement;

class PaginationItemElement extends BaseElement
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper('li');
    }

    /**
     * @param bool $active
     *
     * @return static
     */
    public function active(bool $active): static
    {
        $active && $this->setWrapperClass(0, 'active');
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        if (!$enabled) {
            $this->name = 'span'; // A different tab name.
            $this->setWrapperClass(0, 'disabled');
        }
        return $this;
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->setWrapperAttribute(0, 'data-page', $number);
        $this->addText($number);
        return $this;
    }
}
