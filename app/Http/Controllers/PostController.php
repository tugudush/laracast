<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function list() {    
    //$posts = DB::table('posts')->get();
    //$post = new Task;
    $posts = Post::all();
    return view('pages.posts', [
      'posts' => $posts
    ]);
  } // End of public function list()
}
