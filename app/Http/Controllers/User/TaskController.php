<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
use App\Project;
use App\User;
use App\Comment;
use DB;

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

        $comments = DB::select('select t.title as tasktitle, c.comment as comment, c.created_at as comment_date ,u.name as username from tasks as t, comments as c, users as u, comment_task as ct where t.id = ct.task_id and c.id = ct.comment_id and u.id = ct.user_id and t.id = ?',[$id]);

        // dd($join);
        return view('users.show',['task' => $task, 'comments' => $comments]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'progress' => 'required|min:0,max:100',
            'status' => 'required|min:0,max:2'
        ]);
        
        $task = Task::findOrFail($id);
        $task->status = $request->input('status');
        $task->progress = $request->input('progress');
        $task->save();

        return redirect()->route('user.mytask.detail',['id' => $id])->with('status','task updated'); 
    }
}
