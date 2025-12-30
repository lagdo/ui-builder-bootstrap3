<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\ColComponent as BaseComponent;

class ColComponent extends BaseComponent
{
    /**
     * @param int $width
     *
     * @return static
     */
    public function width(int $width): static
    {
        if ($width < 1 || $width > 12) {
            $width = 12; // Full width by default.
        }
        $this->element()->addBaseClass("col-md-$width");
        return $this;
    }
}
