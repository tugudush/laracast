<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Post;

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
    
  } // End of public function run()
} // End of class TaskTableSeeder extends seeeder