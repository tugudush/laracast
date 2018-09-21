<?php

use Illuminate\Database\Seeder;
use App\Task;

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
    Task::truncate();
    Task::create([
      'body' => 'Wash dishes.',
      'completed' => 0
    ]);
  } // End of public function run()
} // End of class TaskTableSeeder extends seeeder