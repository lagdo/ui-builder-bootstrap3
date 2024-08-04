<?php

namespace Lagdo\UiBuilder\Bootstrap3\Traits;

use Lagdo\UiBuilder\BuilderInterface;

trait ButtonTrait
{
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
     * @inheritDoc
     */
    public function button(...$arguments): BuilderInterface
    {
        // A button in an input group must be wrapped into a div with class "input-group-btn".
        // Check the parent scope.
        $scope = $this->builder->scope();
        if ($scope !== null) {
            if ($scope->isInputGroup) {
                $this->builder->createWrapper('div', ['class' => 'input-group-btn']);
            }
        }
        $this->builder->createScope('button', $arguments);
        $this->builder->prependClass('btn');
        $this->builder->setAttribute('type', 'button');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnOutline(): BuilderInterface
    {
        // Not implemented.
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnFullWidth(): BuilderInterface
    {
        if (!$this->builder->scope()->isInButtonGroup) {
            $this->builder->appendClass('btn-block');
        }
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnLarge(): BuilderInterface
    {
        $this->builder->appendClass('btn-lg');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSmall(): BuilderInterface
    {
        $this->builder->appendClass('btn-xs');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnPrimary(): BuilderInterface
    {
        $this->builder->appendClass('btn-primary');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSecondary(): BuilderInterface
    {
        $this->builder->appendClass('btn-default');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnSuccess(): BuilderInterface
    {
        $this->builder->appendClass('btn-success');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnInfo(): BuilderInterface
    {
        $this->builder->appendClass('btn-info');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnWarning(): BuilderInterface
    {
        $this->builder->appendClass('btn-warning');
        return $this;
    }

    /**
     * @return BuilderInterface
     */
    public function btnDanger(): BuilderInterface
    {
        $this->builder->appendClass('btn-danger');
        return $this;
    }
}
