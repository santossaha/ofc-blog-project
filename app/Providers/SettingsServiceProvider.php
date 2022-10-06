<?php

namespace App\Providers;


use App\Admin\Setting;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
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
    public function boot(Factory $cache, Setting $settings)
    {
        if(Schema::hasTable('settings')){
            $settings = $cache->remember('settings', 60, function() use ($settings){
                return $settings->first();
            });
            config()->set('settings', $settings);
        }
    }
}
