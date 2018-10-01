@extends('layout.master')

@section('header-php')
  <?php
  $body_id = 'page-tasks';
  $body_class = '';
  ?>
@endsection

@section('meta-dynamic')
  <title>{{ isset($meta_title) ? $meta_title : 'Tasks | Laracast' }}</title>
  <meta name="description" content="{{ isset($meta_description) ? $meta_description : 'Tasks' }}">
  <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : 'tasks' }}">
@endsection

@section('content')
  <h2>Tasks List</h2>
  <ul>
    @foreach ($tasks as $task)
      <li>
        <a href="{{ URL::to('task/'.$task->id) }}">
          {{ $task->body }}<br>
          {{ $task->created_at->toFormattedDateString() }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

@section('page-footer-scripts')

@endsection


    

