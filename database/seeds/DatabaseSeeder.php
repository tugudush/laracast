<?php

use Illuminate\Database\Seeder;
use App\Task;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */

  public function run() {
    $this->call(TaskTableSeeder::class);
  } // End of public function run()
  
} // End of class DatabaseSeeder extends Seeder

class TaskTableSeeder extends seeder
{
  public function run() {
    $faker = Factory::create();
    Task::truncate();

    for ($i=1; $i<=5; $i++) {
      Task::create([
        'body' => $faker->realText(30),
        'completed' => false
      ]);
    } // End of for (i=1; i<=5; i++)
    
  } // End of public function run()
} // End of class TaskTableSeeder extends seeeder