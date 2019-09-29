<?php

namespace Spatie\ViewComponents;

final class CompileSlotDirective
{
    public function __invoke(string $expression): string
    {
        return "<?php app(Spatie\ViewComponents\ComponentFactory::class)->slot({$expression}); ?>";
    }
}
