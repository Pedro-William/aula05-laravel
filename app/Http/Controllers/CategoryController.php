<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('category.index', ['categories' => Category::all()]);
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        Category::create($request->all());
        return redirect('/category');
    }

    public function edit(Category $category){
        return view('category.edit', ['category'=>$category]);
    }

    public function update(Category $category, Request $request){
        $category->update($request->all());
        return redirect('/category');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('/category');
    }
}
