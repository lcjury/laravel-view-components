<?php

namespace Spatie\ViewComponents\Tests;

use Spatie\ViewComponents\ComponentFactory;

class ComponentFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_rendereable_view()
    {
        $componentFactory = $this->app->make(ComponentFactory::class);
        $myComponent = $componentFactory->make('Spatie\ViewComponents\Tests\Stubs\MyComponent');

        $this->assertInstanceOf('\Illuminate\Contracts\Support\Renderable', $myComponent);
    }
}
