<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function index(){
        return view('food.index', ['allFood' => Food::all()]);
    }

    public function create(){
        return view('food.create');
    }

    public function store(Request $request){
        Food::create($request->all());
        return redirect('/food');
    }

    public function edit(Food $food){
        return view('food.edit', ['food' => $food]);
    }

    public function update(Food $food, Request $request){
        $food->update($request->all());
        return redirect('/food');
    }

    public function destroy(Food $food){
        $food->delete();
        return redirect('/food');
    }

    public function show(Food $food){
        return view('food.show', ['food'=>$food]);
    }
}
