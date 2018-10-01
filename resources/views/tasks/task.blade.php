@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-task';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Task | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Task' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'task' }}">
@endsection

@section('content')
  {{ $task->created_at->toFormattedDateString() }}<br>
  {{ $task->body }}
@endsection

@section('page-footer-scripts')

@endsection