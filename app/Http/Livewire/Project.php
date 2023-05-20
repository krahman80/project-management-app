<?php

namespace App\Http\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $project;


    public function mount($slug)
    {
        // nested eager loading
        $this->project = ModelsProject::with('tasks.user')->where('slug', $slug)->get();
    }
    public function render()
    {
        // dd($this->project);
        return view('livewire.project', ['projects' => $this->project]);
    }
}
