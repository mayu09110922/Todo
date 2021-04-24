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
    public function create(Task $task)
    {
        return view('Task.create');
    }
    public function store(Task $task, Request $request)
    {
    $input = $request['task'];
    $task->fill($input)->save();
    return redirect('/tasks/' . $task->id);
    }
}
