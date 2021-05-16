<?php

namespace App\Http\Controllers;

use App\Models\Money;
use App\Http\Requests\MoneyRequest;

class MoneyController extends Controller
{
    public function index(Money $money)
    {
        return view('Money.index')->with(['moneys' => $money->sortable()->get()]);
    }
    
    public function show(Money $money)
    {
        $moneys = $money->sortable();
        return view('Money.show')->with(['money' => $money]);
    }
    
    public function create(Money $money)
    {
        return view('Money.create');
    }
    
    public function store(Money $money, MoneyRequest $request)
    {
         $input = $request['money'];
        $money->fill($input)->save();
        return redirect('/moneys/' . $money->id);
    }
    
    public function edit(Money $money)
    {
        return view('Money.edit')->with(['money' => $money]);
    }
   
    public function update(MoneyRequest $request, Money $money)
    {
    $input = $request['money'];
    $money->fill($input)->save();
    return redirect('/moneys/' . $money->id);
    }
    
    public function destroy(Money $money)
    {
        $money->delete();
        return redirect('https://6f411331d49b4b949d6d1058fb3cf883.vfs.cloud9.ap-northeast-1.amazonaws.com/moneys');
    }
}
