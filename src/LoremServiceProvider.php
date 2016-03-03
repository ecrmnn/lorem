<?php
namespace Ecrmnn\Lorem;

use Illuminate\Support\ServiceProvider;

class LoremServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('lorem', function () {
            return new Lorem;
        });

        require 'helpers.php';
    }
}
