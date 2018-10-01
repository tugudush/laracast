@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-add-post';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Add Post | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Add Post' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'add post' }}">
@endsection

@section('content')
  <h2>Add Post</h2>

  <form id="add-post" class="add-form" action="{{ URL::to('post/submit') }}" method="POST">
    @include('snippets.errors')
    {{ csrf_field() }}
    <input type="text" id="title" name="title" placeholder="Title">    
    <textarea id="body" name="body" placeholder="body" rows="5"></textarea>
    <button type="submit" placeholder="body">Submit</button>
  </form><!--/add-post-->
@endsection

@section('page-footer-scripts')

@endsection