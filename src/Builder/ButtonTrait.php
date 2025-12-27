<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BadgeElement;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonElement;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonGroupElement;
use Lagdo\UiBuilder\Component\BadgeInterface;
use Lagdo\UiBuilder\Component\ButtonGroupInterface;
use Lagdo\UiBuilder\Component\ButtonInterface;

trait ButtonTrait
{
    /**
     * @inheritDoc
     */
    public function buttonGroup(...$arguments): ButtonGroupInterface
    {
        return $this->createElementOfClass(ButtonGroupElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function button(...$arguments): ButtonInterface
    {
        return $this->createElementOfClass(ButtonElement::class, $arguments);
    }

    /**
     * @return BadgeInterface
     */
    public function badge(...$arguments): BadgeInterface
    {
        return $this->createElementOfClass(BadgeElement::class, $arguments);
    }
}
