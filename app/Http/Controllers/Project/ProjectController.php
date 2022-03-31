<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::orderBy('id','desc')->paginate(10);
        return view('projects.index', ['projects' => $projects]);
    }

    public function show($id) {
        $project = Project::findOrFail($id);
        return view('projects.show', ['project' => $project]);
    }

    public function update(Request $request, $id) {
        
        $request->validate([
            'name' => 'required|min:0,max:100',
            'deadline' => 'required',
            'status' => 'required|min:0,max:2'
        ]);
    
        $pieces = explode("-", $request->input('deadline'));
        $date1 = Carbon::create($pieces[0], $pieces[1], $pieces[2], 0, 0, 0);
        
        $project = Project::find($id);
        $project->update([
            'name' => $request->input('name'), 
            'deadline' => $date1, 
            'status' => (int)$request->input('status')
            ]);

        return redirect()->route('project.update', ['id' => $id])->with('status','project updated');
    }
}
