<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

class Task extends Model
{
  //protected $table = 'tasks';
  protected $fillable = ['body', 'completed'];

  public static function seed() {
    $faker = Factory::create();
    //Task::truncate();
    
    for ($i=1; $i<=5; $i++) {
      
      Task::create([        
        'body' => $faker->realText(30),
        'completed' => false
      ]);
      
    } // End of for (i=1; i<=5; i++)
    
  } // End of public static function seed()
}
