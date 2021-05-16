<?php

namespace App\Http\Controllers;

use App\Models\Have;
use App\Http\Requests\HaveRequest;

class HaveController extends Controller
{
     public function index(Have $have)
    {
        return view('Have.index')->with(['haves' => $have->sortable()->get()]);
    }
    
    public function show(Have $have)
    {
        $haves = $have->sortable();
        return view('Have.show')->with(['have' => $have]);
    }
    
    public function create(Have $have)
    {
        return view('Have.create');
    }
    
    public function store(Have $have, HaveRequest $request)
    {
         $input = $request['have'];
        $have->fill($input)->save();
        return redirect('/haves/' . $have->id);
    }
    
    public function edit(Have $have)
    {
        return view('Have.edit')->with(['have' => $have]);
    }
   
    public function update(HaveRequest $request, Have $have)
    {
    $input = $request['have'];
    $have->fill($input)->save();
    return redirect('/haves/' . $have->id);
    }
    
    public function destroy(Have $have)
    {
        $have->delete();
        return redirect('https://6f411331d49b4b949d6d1058fb3cf883.vfs.cloud9.ap-northeast-1.amazonaws.com/haves');
    }
}
