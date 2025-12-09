<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;


class StoreContoller extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Task::create($data);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }
}
