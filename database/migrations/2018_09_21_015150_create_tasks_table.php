<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Task;
use Faker\Factory;

class CreateTasksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('tasks', function (Blueprint $table) {
      $table->increments('id');
      //$table->integer('user_id');
      //$table->string('title');
      $table->text('body');
      $table->boolean('completed');
      $table->timestamps();
    });

    //Artisan::call('db:seed');

    $faker = Factory::create();
    Task::truncate();

    for ($i=1; $i<=5; $i++) {
      
      Task::create([
        'body' => $faker->realText(30),
        'completed' => false
      ]);

    } // End of for (i=1; i<=5; i++)
        
  } // End of public function up()

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('tasks');
  }
}
