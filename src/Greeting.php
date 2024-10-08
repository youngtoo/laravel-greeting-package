<?php

namespace Iantoo\GreetingPackage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;

use Carbon\Carbon;

class Greeting
{
    public static function greet(){

        // Get the hour
        $hour = date('H');
        
        // The greeting
        $greeting = '';

        // Check hours
        // Get up the custom greeting messages
        if($hour >= 5 && $hour < 12){
            $greeting = Lang::get('greeting-package::greeting.morning');
        }
        elseif ($hour >= 12 && $hour < 18){
            $greeting = Lang::get('greeting-package::greeting.afternoon');
        } 
        else{
            $greeting = Lang::get('greeting-package::greeting.evening');
        }

        // Check authentication to retrieve the username
        if(Auth::check()){
            $user = Auth::user();
            $name = $user->name ?? $user->email;
            return $greeting. ', ' . $name;
        }
        
        return $greeting. ', '. Lang::get('greeting-package::greeting.guest');;
    }

    public static function currentDate(){
        $now = Carbon::now();
        $dayOfWeek = $now->format('l');
        $month = $now->format('F');
        $year = $now->format('Y');
        $day = $now->format('j');

        return $dayOfWeek . ', ' . $month . ' ' . $day . ', ' . $year;

    }
}