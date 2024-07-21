<?php

namespace Lagdo\UiBuilder\Bootstrap3;

use Lagdo\UiBuilder\AbstractBuilder;

class Builder extends AbstractBuilder
{
    use Traits\LayoutTrait;
    use Traits\ButtonTrait;
    use Traits\PanelTrait;
    use Traits\FormTrait;
    use Traits\MenuTrait;
    use Traits\TabTrait;
    use Traits\PaginationTrait;

    /**
     * @var array
     */
    protected $buttonStyles = [
        0 => 'default',
        self::BTN_PRIMARY => 'primary',
        self::BTN_DANGER => 'danger',
    ];

    /**
     * @inheritDoc
     */
    public function addIcon(string $icon): self
    {
        return $this->addHtml('<span class="glyphicon glyphicon-' . $icon . '" aria-hidden="true" />');
    }

    /**
     * @inheritDoc
     */
    public function addCaret(): self
    {
        return $this->addHtml('<span class="caret" />');
    }

    /**
     * @inheritDoc
     */
    public function checkbox(bool $checked = false, ...$arguments): self
    {
        if($this->builder->isInputGroup())
        {
            $this->builder->createWrapper('span', [
                'class' => 'input-group-addon',
                'style' => 'background-color:white;padding:8px;',
            ]);
        }
        return parent::checkbox($checked, ...$arguments);
    }

    /**
     * @inheritDoc
     */
    public function text(...$arguments): self
    {
        // A label in an input group must be wrapped into a span with class "input-group-addon".
        if ($this->builder->isInputGroup()) {
            $this->builder->createWrapper('span', ['class' => 'input-group-addon']);
        }
        $this->builder->createScope('span', $arguments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function inputGroup(...$arguments): self
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass('input-group');
        $this->scope->isInputGroup = true;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function table(bool $responsive, string $style = '', ...$arguments): self
    {
        if ($responsive) {
            $this->builder->createWrapper('div', ['class' => 'table-responsive']);
        }
        $this->builder->createScope('table', $arguments);
        $this->builder->prependClass($style ? "table table-$style" : 'table');
        return $this;
    }
}
