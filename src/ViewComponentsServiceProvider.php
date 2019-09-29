<?php

namespace Spatie\ViewComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewComponentsServiceProvider extends ServiceProvider
{
    public $singletons = [
        ComponentFactory::class => ComponentFactory::class,
    ];

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/view-components.php' => config_path('view-components.php'),
        ], 'config');

        Blade::directive(
            'render',
            $this->app->make(CompileRenderDirective::class)
        );

        Blade::directive(
            'startrender',
            $this->app->make(CompileStartRenderDirective::class)
        );

        Blade::directive(
            'endrender',
            $this->app->make(CompileEndRenderDirective::class)
        );

        Blade::directive(
            'namedslot',
            $this->app->make(CompileSlotDirective::class)
        );

        Blade::directive(
            'endnamedslot',
            $this->app->make(CompileEndSlotDirective::class)
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/view-components.php', 'view-components');

        $this->app->singleton(ComponentFinder::class, function () {
            return new ComponentFinder(
                $this->app->config->get('view-components.root_namespace'),
                $this->app->config->get('view-components.namespaces')
            );
        });
    }
}
