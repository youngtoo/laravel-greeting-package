<?php
namespace Iantoo\GreetingPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Iantoo\GreetingPackage\Console\Commands\GreetUser;
use Iantoo\GreetingPackage\Console\Commands\PrintCurrentDate;

class GreetingServiceProvider extends ServiceProvider
{
    public function register(){
        // Register bindings.

        // Register the facade
        App::singleton('greeting', function(){
            return new Greeting;
        });

        // Publish config
        $this->mergeConfigFrom(__DIR__.'/../config/greeting.php', 'greeting');

    }

    public function boot(){
        // Publish resources on perform actions on package load.

        // Publish the configuration file
        $this->publishes([
            __DIR__ . '/../config/greeting.php' => config_path('greeting.php'),
        ], 'config');

        // Publish the language file
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/greeting-package')
        ]);

        // Load translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'greeting-package');

        // Register the command
        if($this->app->runningInConsole()){
            $this->commands([
                GreetUser::class,
                PrintCurrentDate::class,
            ]);
        }
    }
}