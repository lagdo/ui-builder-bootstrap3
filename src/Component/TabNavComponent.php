<?php

namespace Lagdo\UiBuilder\Bootstrap3\Component;

use Lagdo\UiBuilder\Component\Base\TabNavComponent as BaseComponent;

class TabNavComponent extends BaseComponent
{
    /**
     * @var string
     */
    public static string $tag = 'ul';

    /**
     * @return void
     */
    protected function onCreate(): void
    {
        $this->element()->addBaseClass('nav');
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
        $this->element()->addBaseClass($styleClass);

        if ($this->parent()->prop('vertical', false)) {
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
