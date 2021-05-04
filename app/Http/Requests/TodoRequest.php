<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    public function rules()
    {
   return[
       'todo.title' => 'required|string|max:100',
       'todo.body' => 'required|string|max:4000',
       'todo.limit' =>'required',
       ];
    }
}
