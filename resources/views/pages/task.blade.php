@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-index';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Tasks | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Tasks' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'tasks' }}">
@endsection

@section('content')
  {{ $task->created_at->toFormattedDateString() }}<br>
  {{ $task->body }}
@endsection

@section('page-footer-scripts')

@endsection