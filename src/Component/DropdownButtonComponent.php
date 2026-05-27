<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Attr\VisualEnum;
use Lagdo\UiBuilder\Component\Attr\SizeEnum;
use Lagdo\UiBuilder\Component\Base\DropdownButtonComponent as BaseComponent;

class DropdownButtonComponent extends BaseComponent
{
    /**
     * @inheritDoc
     */
    protected function onCreate(): void
    {
        $this->element()->setAttributes(['data-toggle' => 'dropdown',
            'aria-haspopup' => 'true', 'aria-expanded' => 'false']);
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $type = $this->prop('alert') ?? $this->prop('visual', null);
        if ($type === null || $type === VisualEnum::SECONDARY) {
            $type = VisualEnum::DEFAULT;
        }
        $this->element()->addBaseClass("btn-{$type->value}");

        switch($this->prop('size', null)) {
        case SizeEnum::LARGE:
            $this->element()->addClass('btn-lg');
            break;
        case SizeEnum::SMALL:
            $this->element()->addClass('btn-xs');
            break;
        default:
        }
    }
}
