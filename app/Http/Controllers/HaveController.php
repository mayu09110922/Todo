<?php

namespace App\Http\Controllers;

use App\Models\Have;
use Illuminate\Http\Request;

class HaveController extends Controller
{
     public function index(Have $have)
    {
        return view('Have.index')->with(['haves' => $have->get()]);
    }
    public function list(Have $have)
    {
        return view('Have.list')->with(['haves' => $have->getPaginateByLimit(5)]);
    }
    public function create(Have $have)
    {
        return view('Have.create');
    }
    public function store(Have $have, Request $request)
    {
         $input = $request['have'];
        $have->fill($input)->save();
        return redirect('/haves/' . $have->id);
    }
}
