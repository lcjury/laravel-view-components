<?php

namespace Spatie\ViewComponents;

final class CompileEndSlotDirective
{
    public function __invoke(): string
    {
        return "<?php app(Spatie\ViewComponents\ComponentFactory::class)->endSlot(); ?>";
    }
}
