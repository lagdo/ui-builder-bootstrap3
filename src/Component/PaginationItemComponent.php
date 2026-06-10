<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
{
    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addWrapper($this->newElement('li'));
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        if ($this->prop('active', false)) {
            $this->wrapper(0)->setClass('active');
        }
        if (!$this->prop('enabled', true)) {
            $this->element()->addClass('disabled')
                ->setTag('span'); // A different tag name.
        }
    }

    /**
     * @param int $number
     *
     * @return static
     */
    public function number(int $number): static
    {
        $this->wrapper(0)->setAttribute('data-page', $number);
        return $this;
    }
}
