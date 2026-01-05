<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\PaginationItemComponent as BaseComponent;

class PaginationItemComponent extends BaseComponent
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
        if ($active) {
            $this->wrapper(0)->setClass('active');
        }
        return $this;
    }

    /**
     * @param bool $enabled
     *
     * @return static
     */
    public function enabled(bool $enabled): static
    {
        $wrapper = $this->wrapper(0);
        if (!$enabled) {
            $this->element()->setTag('span'); // A different tag name.
            $wrapper->setClass('disabled');
            return $this;
        }

        if ($wrapper->hasClass('disabled')) {
            $wrapper->removeClass('disabled');
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
        $this->wrapper(0)->setAttribute('data-page', $number);
        return $this;
    }
}
