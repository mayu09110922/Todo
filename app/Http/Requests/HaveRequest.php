<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HaveRequest extends FormRequest
{
   public function rules()
    {
   return[
       'have.title' => 'required|string|max:100',
       'have.body' => 'required|string|max:4000',
       'have.limit' =>'required',
       ];
    }
}
