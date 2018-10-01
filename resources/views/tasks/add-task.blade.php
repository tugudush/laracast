@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-add-task';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Add Task | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Add Task' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'add task' }}">
@endsection

@section('content')
  <h2>Add Task</h2>
@endsection

@section('page-footer-scripts')

@endsection