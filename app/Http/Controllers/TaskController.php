<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    protected $tasks;

    function __construct(Task $tasks)
    {
        $this->tasks = $tasks;
    }

    function index()
    {
        $tasks = $this->tasks->all();
        return view('tasks.index',['tasks' => $tasks]);
    }
}
