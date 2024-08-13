<?php
namespace Iantoo\GreetingPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Iantoo\GreetingPackage\Console\Commands\GreetUser;

class GreetingServiceProvider extends ServiceProvider
{
    public function register(){
        // Register bindings.

        // Register the facade
        App::singleton('greeting', function(){
            return new Greeting;
        });

        // Publish config
        $this->mergeConfigFrom(__DIR__.'/../config/greeting.php');

    }

    public function boot(){
        // Publish resources on perform actions on package load.

        // Publish the configuration file
        $this->publishes([
            __DIR__ . '/../config/greeting.php' => config_path('greeting.php'),
        ], 'config');

        // Register the command
        if($this->app->runningInConsole()){
            $this->commands([
                GreetUser::class,
            ]);
        }
    }
}