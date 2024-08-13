<?php

namespace Iantoo\GreetingPackage;

use Illuminate\Support\Facades\Auth;

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
            $greeting = 'Good Morning';
        }
        elseif ($hour >= 12 && $hour < 18){
            $greeting = 'Good Afternoon';
        } 
        else{
            $greeting = 'Hello';
        }

        // Check authentication to retrieve the username
        if(Auth::check()){
            $user = Auth::user();
            $name = $user->name ?? $user->email;
            return $greeting. ', ' . $name;
        }
        
        return $greeting. ', there!';
    }
}