<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\AlertComponent as BaseComponent;

class AlertComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'p';

    /**
     * @inheritDoc
     */
    protected function onBuild(): void
    {
        $level = $this->prop('level', null);
        if ($level !== null) {
            $this->element()->addClass("bg-{$level->value}");
        }
    }
}
