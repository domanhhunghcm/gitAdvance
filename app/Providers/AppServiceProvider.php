<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\PaymentGateway;
use App\Billing\payMentImplement;
use Illuminate\Support\Facades\View;
use App\Models\channel;
use App\Http\View\composer\channelComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(payMentImplement::class, function ($app) {
            return new PaymentGateway(currentcy: "usd");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //View::share('channelaaaaaa',channel::all());

        // View::composer("channels.index",function ($view) {
        //     $view->with('channelaaaaaa',channel::all());
        // });
    
        // Using class based composers...
        View::composer('channels.index', channelComposer::class);
    
    }
}
