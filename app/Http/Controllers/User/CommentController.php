<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use App\Task;
use DB;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $task = Task::findOrFail($request->input('task_id'));
        
        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->save();

        $comment->tasks()->save($task, ['user_id' => $request->input('user_id')]);

        return redirect()->route('user.mytask.detail',['id' => $request->input('task_id')])->with('status', 'comment added');

    }

}
