@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-index';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : '404 - Page not found! | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : '404 - Page not found! | Laracast' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : '404, page not found, laracast, laravel' }}">
@endsection

@section('content')
  Welcome
@endsection

@section('page-footer-scripts')

@endsection