@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-posts';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Posts | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Posts' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'posts' }}">
@endsection

@section('content')
  <h2>Posts List</h2>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ URL::to('post/'.$post->id) }}">
          {{ $post->title }}<br>
          {{ $post->created_at->toFormattedDateString() }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

@section('page-footer-scripts')

@endsection


    

