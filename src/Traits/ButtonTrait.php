<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\Builder as AbstractBuilder;
use Lagdo\UiBuilder\BuilderInterface;

trait ButtonTrait
{
    /**
     * @var array
     */
    protected $mainStyles = [
        AbstractBuilder::BTN_PRIMARY => 'primary',
        AbstractBuilder::BTN_SECONDARY => 'default',
        AbstractBuilder::BTN_SUCCESS => 'success',
        AbstractBuilder::BTN_INFO => 'info',
        AbstractBuilder::BTN_WARNING => 'warning',
        AbstractBuilder::BTN_DANGER => 'danger',
    ];

    /**
     * @var array
     */
    protected $sizeStyles = [
        AbstractBuilder::BTN_LARGE => 'lg',
        AbstractBuilder::BTN_SMALL => 'xs',
    ];

    abstract public function end(): BuilderInterface;

    /**
     * @inheritDoc
     */
    public function buttonGroup(bool $fullWidth, ...$arguments): BuilderInterface
    {
        $this->builder->createScope('div', $arguments);
        $this->builder->prependClass($fullWidth ? 'btn-group btn-group-justified' : 'btn-group');
        $this->builder->setAttributes(['role' => 'group', 'aria-label' => '...']);
        $this->builder->scope()->isButtonGroup = true;
        return $this;
    }

    /**
     * @param integer $flags
     *
     * @return string
     */
    private function mainClass(int $flags): string
    {
        foreach ($this->mainStyles as $mask => $value) {
            if ($flags & $mask) {
                return "btn btn-$value";
            }
        }
        // The default style is "default"
        return 'btn btn-default';
    }

    /**
     * @param integer $flags
     * @param boolean $isInButtonGroup
     *
     * @return string
     */
    private function buttonClass(int $flags, bool $isInButtonGroup): string
    {
        $btnClass = $this->mainClass($flags);
        foreach ($this->sizeStyles as $mask => $value) {
            if ($flags & $mask) {
                $btnClass .= " btn-$value";
            }
        }
        if (($flags & AbstractBuilder::BTN_FULL_WIDTH) && !$isInButtonGroup) {
            $btnClass .= ' btn-block';
        }
        return $btnClass;
    }

    /**
     * @inheritDoc
     */
    public function button(int $flags = 0, ...$arguments): BuilderInterface
    {
        // A button in an input group must be wrapped into a div with class "input-group-btn".
        // Check the parent scope.
        $scope = $this->builder->scope();
        $isInButtonGroup = false;
        if ($scope !== null) {
            if ($scope->isInputGroup) {
                $this->builder->createWrapper('div', ['class' => 'input-group-btn']);
            }
            if ($scope->isButtonGroup && ($flags & AbstractBuilder::BTN_FULL_WIDTH)) {
                $this->builder->createWrapper('div', ['class' => 'btn-group', 'role' => 'group']);
                $isInButtonGroup = true;
            }
        }
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass($this->buttonClass($flags, $isInButtonGroup));
        $this->builder->setAttribute('type', 'button');
        return $this;
    }
}
