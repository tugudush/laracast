@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-index';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Laravel Tutorials' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'laracast, laravel' }}">
@endsection

@section('content')
  Welcome
@endsection

@section('page-footer-scripts')

@endsection