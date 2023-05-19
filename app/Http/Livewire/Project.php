<?php

namespace App\Http\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $project;
    public $tasks;

    public function mount($slug)
    {
        // $this->project = ModelsProject::where('slug', $slug)->with('tasks')->get();
        $this->project = ModelsProject::where('slug', $slug)->first();

        // $author = \App\Author::where('first_name', '=','Jules')->where('last_name', '=', 'Verne')->first();
        // $this->tasks = $this->project->tasks()->get();
    }
    public function render()
    {
        // dd($this->project);
        return view('livewire.project', ['project' => $this->project]);
    }
}
