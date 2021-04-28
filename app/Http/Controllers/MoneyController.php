<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function index(Money $money)
    {
        return view('Money.index')->with(['moneys' => $money->get()]);
    }
    public function show(Money $money)
    {
        return view('Money.show')->with(['moneys' => $money->getPaginateByLimit(5)]);
    }
    public function create(Money $money)
    {
        return view('Money.create');
    }
    public function store(Money $money, Request $request)
    {
         $input = $request['money'];
        $money->fill($input)->save();
        return redirect('/moneys/' . $money->id);
    }
}
