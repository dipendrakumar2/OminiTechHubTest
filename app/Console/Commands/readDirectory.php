<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class readDirectory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'read:readdirectory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read Command line file names and sort it';

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
          $dir = public_path() . '/etc/dictionary/'; //Directory file path
          $handle = opendir($dir); // open directory to read files
$names = array();
// Itteration to get file names
while($name = readdir($handle)) {
    $names[] = $name;
}
closedir($handle);
//Sorting
for($i=0; $i<count($names)-1; $i++)
    {
        for($j=0; $j<count($names)-1; $j++)
        {
            if($names[$j]> $names[$j+1]){
                $temp= $names[$j+1];
                $names[$j+1]= $names[$j];
                $names[$j]= $temp;
            }
        }

    }


print_r($names);
    }
}
