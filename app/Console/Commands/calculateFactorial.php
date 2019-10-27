<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class calculateFactorial extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'read:calculatefactorial {number}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate Factorial of given number ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
         $get_number = $this->argument('number'); //read command line number
        $fact = $this->Factorial($get_number); // call factorial function
echo "Factorial = $fact"; 
    }
    // calculate factorial
    public function Factorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
}
