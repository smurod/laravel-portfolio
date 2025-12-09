<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create(){
        $users = User::all();
        return view('categories.create', compact('users'));
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'user_id' => 'required',
        ]);
        Category::create($data);
        return redirect(route('categories.index'));
    }
    public function edit(Category $category){
        $users = User::all();
        return view('categories.edit', compact('category', 'users'));
    }
    public function update(Request $request, Category $category){
        $data = $request->validate([
            'name' => 'required',
            'user_id' => 'required'
        ]);
        $category->update($data);
        return redirect(route('categories.index'));
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect(route('categories.index'));
    }

}
