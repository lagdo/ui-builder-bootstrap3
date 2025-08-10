<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Element\BadgeElement;
use Lagdo\UiBuilder\Bootstrap3\Element\ButtonElement;
use Lagdo\UiBuilder\Bootstrap3\Element\ButtonGroupElement;
use Lagdo\UiBuilder\Element\BadgeInterface;
use Lagdo\UiBuilder\Element\ButtonGroupInterface;
use Lagdo\UiBuilder\Element\ButtonInterface;

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
