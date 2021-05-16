<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoneyRequest extends FormRequest
{
  public function rules()
    {
   return[
       'money.title' => 'required|string|max:100',
       'money.body' => 'required|string|max:4000',
       'money.limit' =>'required',
       ];
    }
}
