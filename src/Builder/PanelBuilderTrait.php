<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\PanelComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelBodyComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelFooterComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelHeaderComponent;

trait PanelBuilderTrait
{
    /**
     * @return string
     */
    protected function _panelComponentClass(): string
    {
        return PanelComponent::class;
    }

    /**
     * @return string
     */
    protected function _panelHeaderComponentClass(): string
    {
        return PanelHeaderComponent::class;
    }

    /**
     * @return string
     */
    protected function _panelBodyComponentClass(): string
    {
        return PanelBodyComponent::class;
    }

    /**
     * @return string
     */
    protected function _panelFooterComponentClass(): string
    {
        return PanelFooterComponent::class;
    }
}
