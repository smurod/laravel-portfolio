<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Task $task){
        $users = User::all();
        $categories = Category::all();
        return view('tasks.edit', compact('task', 'users', 'categories'));
    }
}
