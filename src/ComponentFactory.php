<?php

namespace Spatie\ViewComponents;

use Illuminate\View\Concerns\ManagesComponents;

final class ComponentFactory
{
    use ManagesComponents;

    /**
     * Get the evaluated view contents for the given component.
     *
     * @param  string  $component
     * @param  array   $data
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function make($component, $data = [])
    {
        return new ComponentView(app($component, $data));
    }
}
