<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;
use Faker\Factory;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
        $table->string('title');
        $table->text('body');
        $table->increments('id');
        $table->timestamps();
    });

    $faker = Factory::create();
    Post::truncate();

    for ($i=1; $i<=5; $i++) {
      
      Post::create([
        'title' => $faker->realText(20),
        'body' => $faker->realText(30)        
      ]);
      
    } // End of for (i=1; i<=5; i++)
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts');
  }
} // End of class CreatePostsTable extends Migration