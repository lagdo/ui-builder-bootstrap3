<?php

namespace Lagdo\UiBuilder\Bootstrap3;

use Lagdo\UiBuilder\AbstractBuilder;
use Lagdo\UiBuilder\Bootstrap3\Component\TableComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\LabelComponent;
use Lagdo\UiBuilder\Bootstrap3\Component\RowComponent;

class Builder extends AbstractBuilder
{
    use Builder\LayoutTrait;
    use Builder\ButtonTrait;
    use Builder\PanelTrait;
    use Builder\FormTrait;
    use Builder\MenuTrait;
    use Builder\TabTrait;
    use Builder\PaginationTrait;

    /**
     * @inheritDoc
     */
    public function formRow(...$arguments): RowComponent
    {
        $element = $this->row(...$arguments);
        $element->addBaseClass('form-group');
        return $element;
    }

    /**
     * @inheritDoc
     */
    public function label(...$arguments): LabelComponent
    {
        return $this->createElementOfClass(LabelComponent::class, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function table(...$arguments): TableComponent
    {
        return $this->createElementOfClass(TableComponent::class, $arguments);
    }
}
