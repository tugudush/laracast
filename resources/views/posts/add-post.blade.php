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
@endsection

@section('page-footer-scripts')

@endsection