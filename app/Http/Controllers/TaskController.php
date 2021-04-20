<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Task $task)
    {
        return view('Task.index')->with(['tasks' => $task->get()]);  
    }
    public function show(Task $task)
    {
        return view('Task.show')->with(['task' => $task]);
    }
}
