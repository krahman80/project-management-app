<?php

namespace App\Http\Livewire;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public $project;

    protected $listeners = [
        'taskAdded' => '$refresh',
        'taskStatus' => '$refresh'
    ];

    // public function taskAdded($slug)
    // {
    //     $this->mount($slug);
    //     $this->render();
    // }

    public function mount($slug)
    {
        // nested eager loading
        $this->project = ModelsProject::with(['tasks.user', 'owner'])->where('slug', $slug)->get();
    }
    public function render()
    {
        // dd($this->project);
        return view('livewire.project', ['projects' => $this->project]);
    }
}
