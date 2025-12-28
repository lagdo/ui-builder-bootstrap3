<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\BadgeComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\ButtonGroupComponent;

trait ButtonBuilderTrait
{
    /**
     * @return string
     */
    protected function _buttonComponentClass(): string
    {
        return ButtonComponent::class;
    }

    /**
     * @return string
     */
    protected function _buttonGroupComponentClass(): string
    {
        return ButtonGroupComponent::class;
    }

    /**
     * @return string
     */
    protected function _badgeComponentClass(): string
    {
        return BadgeComponent::class;
    }
}
