<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\repository\customerInterface;
use App\repository\customerReponsitory;

class customerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(customerInterface::class,customerReponsitory::class);
    }
}
