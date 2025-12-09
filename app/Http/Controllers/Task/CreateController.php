<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Request $request){
        $tasks = Task::all();
        $users = User::all();
        $categories = Category::all();
        return view('tasks.create', compact('tasks', 'users', 'categories'));
    }
}
