<?php
namespace Iantoo\GreetingPackage\Console\Commands;

use Illuminate\Console\Command;
use Iantoo\GreetingPackage\Greeting;

class PrintCurrentDate extends Command 
{
    protected $signature = 'date:show';

    protected $description = 'Print out the current date in a formatted manner';


    public function handle(){
        
        $date = Greeting::currentDate();
        $this->info("Today's date is: " . $date);
        return 0;
    }
}