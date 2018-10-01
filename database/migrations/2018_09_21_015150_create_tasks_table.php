<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Task;

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
    
    Task::truncate();
    //Task::seed();    
        
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
