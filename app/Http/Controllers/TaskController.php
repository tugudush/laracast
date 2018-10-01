<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
  public function list() {      
    $tasks = task::all();
    return view('tasks.tasks', [
      'tasks' => $tasks
    ]);
  } // End of public function list()

  public function view(Task $task) {
    $meta_title = $task->title;
    $meta_description = $task->body;  
    return view('tasks.task', compact(
      'task',
      'meta_title',
      'meta_description'
    ));
  } // End of public function view()

  public function add() {
    return view('tasks.add-task');
  }
}
