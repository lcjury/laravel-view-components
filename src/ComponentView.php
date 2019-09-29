<?php

namespace Spatie\ViewComponents;

class ComponentView implements \Illuminate\Contracts\Support\Renderable
{
    private $component;

    public function __construct($component)
    {
        $this->component = $component;
    }

    public function render()
    {
        return $this->component->toHtml();
    }
}
