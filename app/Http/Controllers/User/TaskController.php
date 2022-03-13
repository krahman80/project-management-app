<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Project;
use App\User;

class TaskController extends Controller
{

    public function myTask() {
        $user =  User::findOrFail(auth()->user()->id);
        $mytask = $user->task()->paginate(5);
        // $mytask = User::where('id',auth()->user()->id)->first()->task()->paginate(2);

        return view('users.mytask', ['tasks' => $mytask]);
    }

    public function show($id) {
        $task = Task::findOrFail($id);
        return view('users.show',['task' => $task]);
    }
}
