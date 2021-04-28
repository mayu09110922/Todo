<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Todo $todo)
    {
        return view('Todo.index')->with(['todos' => $todo->get()]);
    }
    public function show(Todo $todo)
    {
        return view('Todo.show')->with(['todos' => $todo->getPaginateByLimit(5)]);
    }
    public function create(Todo $todo)
    {
        return view('Todo.create');
    }
    public function store(Todo $todo, Request $request)
    {
         $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }
}
