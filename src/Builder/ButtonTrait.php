<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BadgeComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonGroupComponent;

trait ButtonTrait
{
    /**
     * @inheritDoc
     */
    public function buttonGroup(...$arguments): ButtonGroupComponent
    {
        return $this->createElementOfClass(ButtonGroupComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function button(...$arguments): ButtonComponent
    {
        return $this->createElementOfClass(ButtonComponent::class, $arguments);
    }

    /**
     * @return BadgeComponent
     */
    public function badge(...$arguments): BadgeComponent
    {
        return $this->createElementOfClass(BadgeComponent::class, $arguments);
    }
}
