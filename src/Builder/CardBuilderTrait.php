<?php

namespace Lagdo\UiBuilder\Bootstrap3\Builder;

use Lagdo\UiBuilder\Bootstrap3\Component;

trait CardBuilderTrait
{
    /**
     * @return void
     */
    protected function initCardBuilder(): void
    {
        $this->cardComponentClass = Component\CardComponent::class;
        $this->cardImageComponentClass = Component\CardImageComponent::class;
        $this->cardHeaderComponentClass = Component\CardHeaderComponent::class;
        $this->cardBodyComponentClass = Component\CardBodyComponent::class;
        $this->cardFooterComponentClass = Component\CardFooterComponent::class;
    }
}
