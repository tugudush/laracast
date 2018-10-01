<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

class Post extends Model
{
  protected $fillable = ['title', 'body'];

  public static function seed() {
    $faker = Factory::create();
    //Post::truncate();
    
    for ($i=1; $i<=5; $i++) {
      
      Post::create([
        'title' => $faker->realText(20),
        'body' => $faker->realText(30)        
      ]);
      
    } // End of for (i=1; i<=5; i++)
    
  } // End of public static function seed()
}
