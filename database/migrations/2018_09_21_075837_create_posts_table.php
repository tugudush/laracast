<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('posts', function (Blueprint $table) {
        $table->string('title');
        $table->text('body');
        $table->increments('id');
        $table->timestamps();
    });
    
    Post::truncate();
    //Post::seed();
    
  } // End of public function up()

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