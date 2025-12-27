<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\PanelComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelBodyComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelFooterComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\PanelHeaderComponent;

trait PanelTrait
{
    /**
     * @inheritDoc
     */
    public function panel(...$arguments): PanelComponent
    {
        return $this->createElementOfClass(PanelComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): PanelHeaderComponent
    {
        return $this->createElementOfClass(PanelHeaderComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): PanelBodyComponent
    {
        return $this->createElementOfClass(PanelBodyComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): PanelFooterComponent
    {
        return $this->createElementOfClass(PanelFooterComponent::class, $arguments);
    }
}
