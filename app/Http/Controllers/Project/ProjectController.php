<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;

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
}
