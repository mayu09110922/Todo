<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest; 

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
    public function store(Todo $todo, TodoRequest $request)
    {
         $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }
    public function edit(Todo $todo)
    {
        return view('Todo.edit')->with(['todo' => $todo]);
    }
    public function update(TodoRequest $request, Todo $todo)
    {
    $input = $request['todo'];
    $todo->fill($input)->save();
    return redirect('/todos/' . $todo->id);
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/');
    }
}
