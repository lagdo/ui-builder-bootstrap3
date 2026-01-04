<?php

namespace Lagdo\UiBuilder\Bootstrap3;

use Lagdo\UiBuilder\AbstractBuilder;

class Builder extends AbstractBuilder
{
    use Builder\LayoutBuilderTrait;
    use Builder\ButtonBuilderTrait;
    use Builder\DropdownBuilderTrait;
    use Builder\PanelBuilderTrait;
    use Builder\FormBuilderTrait;
    use Builder\MenuBuilderTrait;
    use Builder\TabBuilderTrait;
    use Builder\PaginationBuilderTrait;
    use Builder\TableBuilderTrait;

    /**
     * @return void
     */
    protected function _init(): void
    {
        $this->_initLayoutBuilder();
        $this->_initButtonBuilder();
        $this->_initDropdownBuilder();
        $this->_initPanelBuilder();
        $this->_initFormBuilder();
        $this->_initMenuBuilder();
        $this->_initTabBuilder();
        $this->_initPaginationBuilder();
        $this->_initTableBuilder();
    }
}
