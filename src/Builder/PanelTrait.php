<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Element\PanelElement;
use Lagdo\UiBuilder\Bootstrap3\Element\PanelBodyElement;
use Lagdo\UiBuilder\Bootstrap3\Element\PanelFooterElement;
use Lagdo\UiBuilder\Bootstrap3\Element\PanelHeaderElement;
use Lagdo\UiBuilder\Element\PanelInterface;
use Lagdo\UiBuilder\Element\PanelBodyInterface;
use Lagdo\UiBuilder\Element\PanelFooterInterface;
use Lagdo\UiBuilder\Element\PanelHeaderInterface;

trait PanelTrait
{
    /**
     * @inheritDoc
     */
    public function panel(...$arguments): PanelInterface
    {
        return $this->createElementOfClass(PanelElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelHeader(...$arguments): PanelHeaderInterface
    {
        return $this->createElementOfClass(PanelHeaderElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelBody(...$arguments): PanelBodyInterface
    {
        return $this->createElementOfClass(PanelBodyElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function panelFooter(...$arguments): PanelFooterInterface
    {
        return $this->createElementOfClass(PanelFooterElement::class, $arguments);
    }
}
