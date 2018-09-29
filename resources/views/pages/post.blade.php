@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-post';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Post | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Post' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'post' }}">
@endsection

@section('content')
  {{ $post->created_at->toFormattedDateString() }}<br>
  {{ $post->title }}<br>
  {{ $post->body }}
@endsection

@section('page-footer-scripts')

@endsection