<?php

namespace Iantoo\GreetingPackage;

use Illuminate\Support\Facades\Facade;

class GreetingFacade extends Facade {

    protected static function getFacadeAccessor(){
        return 'greeting';
    }
    
}