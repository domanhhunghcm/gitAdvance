<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\PaymentGateway;
use App\Billing\payMentImplement;
use Illuminate\Support\Facades\View;
use App\Models\channel;
use App\Http\View\composer\channelComposer;
use App\hungServiceFacade\hungService;
use Illuminate\Support\Str;
use App\mixinDohung\mixinDomanh;
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
        //View::composer('channels.index', channelComposer::class);
        // $this->app->singleton(hungProvider::class, function ($app) {
        //     return new hungService("dohung1","dohun2","manhhung3");
        // });
        // Str::macro("dohungMacRo",function($moji)
        // { dd(["moji"=>$moji]);
        //     return $moji;
        // });
        Str::mixin(new mixinDomanh());
    }
}
