<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\TabNavComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\TabNavItemComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\TabContentComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\TabContentItemComponent;

trait TabTrait
{
    /**
     * @inheritDoc
     */
    public function tabNav(...$arguments): TabNavComponent
    {
        return $this->createElementOfClass(TabNavComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(...$arguments): TabNavItemComponent
    {
        return $this->createElementOfClass(TabNavItemComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): TabContentComponent
    {
        return $this->createElementOfClass(TabContentComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(...$arguments): TabContentItemComponent
    {
        return $this->createElementOfClass(TabContentItemComponent::class, $arguments);
    }
}
