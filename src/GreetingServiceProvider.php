<?php
namespace Iantoo\GreetingPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class GreetingServiceProvider extends ServiceProvider
{
    public function register(){
        // Register bindings.

        // Register the facade
        App::singleton('greeting', function(){
            return new Greeting;
        });

    }

    public function boot(){
        // Publish resources on perform actions on package load.

    }
}