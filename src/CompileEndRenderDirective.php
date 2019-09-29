<?php

namespace Spatie\ViewComponents;

final class CompileEndRenderDirective
{
    public function __invoke(): string
    {
        return '<?php echo $__env->renderViewComponent(); ?>';
    }
}
