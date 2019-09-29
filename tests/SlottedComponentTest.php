<?php

namespace Spatie\ViewComponents\Tests;

class SlottedComponentTest extends TestCase
{
    /** @test */
    public function it_renders_a_component_with_a_slot()
    {
        $this->assertBladeCompilesTo(
            '<?php echo app(app(Spatie\ViewComponents\ComponentFinder::class)->find(Spatie\ViewComponents\Tests\Stubs\SlottedComponent::class), [])->toHtml(); ?> <?php $__env->slot; ?> hello world <?php $__env->endSlot(); ?> <?php echo $__env->renderViewComponent(); ?>',
            '@render(Spatie\ViewComponents\Tests\Stubs\SlottedComponent::class) @slot hello world @endslot @endrender'
        );
    }

    /** @test */
    public function it_renders_a_component_with_a_slotted_component()
    {
        $this->assertBladeCompilesTo(
            '<?php echo app(app(Spatie\ViewComponents\ComponentFinder::class)->find(Spatie\ViewComponents\Tests\Stubs\SlottedComponent::class), [])->toHtml(); ?> <?php $__env->slot; ?> <?php echo app(app(Spatie\ViewComponents\ComponentFinder::class)->find(Spatie\ViewComponents\Tests\Stubs\MyComponent::class), [])->toHtml(); ?> <?php $__env->endSlot(); ?> <?php echo $__env->renderViewComponent(); ?>',
            '@render(Spatie\ViewComponents\Tests\Stubs\SlottedComponent::class) @slot @render(Spatie\ViewComponents\Tests\Stubs\MyComponent::class) @endslot @endrender'
        );
    }
}
