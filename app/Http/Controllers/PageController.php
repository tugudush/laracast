<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;

class PageController extends Controller
{

  public function index() {
    return view('welcome');
  } // End of public function index()

  public function tasks() {    
    //$tasks = DB::table('tasks')->get();
    //$task = new Task;
    $tasks = Task::all();
    return view('tasks', [
      'tasks' => $tasks
    ]);
  } // End of public function tasks()

  public function task(Task $task) {
    //$task = Task::findOrFail($id);
    return view('task', compact('task'));
  } // End of public function task($id)

} // End of class PageController extends Controller
