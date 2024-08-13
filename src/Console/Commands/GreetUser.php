<?php

namespace Iantoo\GreetingPackage\Console\Commands;

use Illuminate\Console\Command;
use Iantoo\GreetingPackage\Greeting;

class GreetUser extends Command {
    
    protected $signature        = 'greet:user';
    protected $description      = 'Greets the user based on the time of the day.';

    public function handle()
    {
        $this->info(Greeting::greet());
    }
}