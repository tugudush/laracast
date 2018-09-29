<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

  public function list() {      
    $posts = Post::all();
    return view('posts.posts', [
      'posts' => $posts
    ]);
  } // End of public function list()

public function view(Post $post) {
  $meta_title = $post->title;
  $meta_description = $post->body;  
  return view('posts.post', compact(
    'post',
    'meta_title',
    'meta_description'
  ));
} // End of public function view()

public function add() {
  return view('posts.add-post');
}

} // End of class PostController extends Controller
