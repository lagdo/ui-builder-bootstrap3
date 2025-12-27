<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component\TabNavElement;
use Lagdo\UiBuilder\Bootstrap3\Component\TabNavItemElement;
use Lagdo\UiBuilder\Bootstrap3\Component\TabContentElement;
use Lagdo\UiBuilder\Bootstrap3\Component\TabContentItemElement;
use Lagdo\UiBuilder\Component\TabNavInterface;
use Lagdo\UiBuilder\Component\TabNavItemInterface;
use Lagdo\UiBuilder\Component\TabContentInterface;
use Lagdo\UiBuilder\Component\TabContentItemInterface;

trait TabTrait
{
    /**
     * @inheritDoc
     */
    public function tabNav(...$arguments): TabNavInterface
    {
        return $this->createElementOfClass(TabNavElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabNavItem(...$arguments): TabNavItemInterface
    {
        return $this->createElementOfClass(TabNavItemElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContent(...$arguments): TabContentInterface
    {
        return $this->createElementOfClass(TabContentElement::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function tabContentItem(...$arguments): TabContentItemInterface
    {
        return $this->createElementOfClass(TabContentItemElement::class, $arguments);
    }
}
