<?php

namespace HishabKitab\View\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Boot All Blade Directives
     */
    public function boot()
    {
        \Blade::directive('date', function ($expression) {
            dd($expression);
            return '<?php echo date("d M Y", strtotime(' . $expression . ')); ?>';
        });
    }
}
