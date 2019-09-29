<?php

namespace Spatie\ViewComponents\Tests;

use Spatie\ViewComponents\ComponentView;
use Spatie\ViewComponents\Tests\Stubs\MyComponent;

class ComponentViewTest extends TestCase
{
    /** @test */
    public function it_returns_the_view_contents_when_render_is_called()
    {
        $stub = $this->createMock(MyComponent::class);

        $stub->expects($this->once())
             ->method('toHtml')
             ->willReturn('view contents');

        $componentView = new ComponentView($stub);

        $this->assertEquals('view contents', $componentView->render());
    }
}
