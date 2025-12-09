<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(){
        $users = User::all();
        return view('user.create', compact('users'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'nullable'
        ]);
        User::create($data);
        return redirect()->route('user.index');
    }
    public function edit(User $user){
        $users = User::all();
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'nullable'
        ]);
        $user->update($data);
        return redirect()->route('user.index');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index');
    }

    public function test(){
        return view('test');
    }


}
