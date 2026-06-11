<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    protected string $tagName = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->addBaseClass('nav');
    }

    /**
     * @return void
     */
    protected function onBuild(): void
    {
        $styleClass = match($this->prop('style', '')) {
            'pills' => 'nav-pills',
            // 'lines' => '', // Not implemented
            default => 'nav-tabs',
        };
        $this->addBaseClass($styleClass);

        if ($this->parentProp(1, 'vertical', false)) {
            $this->element()->addClass('nav-stacked');
        }
    }

    /**
     * @param bool $justified
     *
     * @return static
     */
    public function fill(bool $justified = false): static
    {
        $this->element()->addClass('nav-justified');
        return $this;
    }
}
