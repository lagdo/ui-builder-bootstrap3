<?php

namespace Lagdo\UiBuilder\Bootstrap3;

use Lagdo\UiBuilder\AbstractBuilder;

class Builder extends AbstractBuilder
{
    use Builder\LayoutBuilderTrait;
    use Builder\ButtonBuilderTrait;
    use Builder\DropdownBuilderTrait;
    use Builder\CardBuilderTrait;
    use Builder\FormBuilderTrait;
    use Builder\MenuBuilderTrait;
    use Builder\TabBuilderTrait;
    use Builder\PaginationBuilderTrait;
    use Builder\TableBuilderTrait;

    /**
     * @return void
     */
    protected function initBuilder(): void
    {
        $this->initLayoutBuilder();
        $this->initButtonBuilder();
        $this->initDropdownBuilder();
        $this->initCardBuilder();
        $this->initFormBuilder();
        $this->initMenuBuilder();
        $this->initTabBuilder();
        $this->initPaginationBuilder();
        $this->initTableBuilder();
    }
}
