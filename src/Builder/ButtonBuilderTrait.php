<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BadgeComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonGroupComponent;

trait ButtonBuilderTrait
{
    /**
     * @return void
     */
    protected function _initButtonBuilder(): void
    {
        $this->buttonComponentClass = ButtonComponent::class;
        $this->buttonGroupComponentClass = ButtonGroupComponent::class;
        $this->badgeComponentClass = BadgeComponent::class;
    }
}
