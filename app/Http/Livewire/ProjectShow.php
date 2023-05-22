<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProjectShow extends Component
{
    public $project;

    protected $listeners = [
        'taskAdded' => '$refresh',
        'taskStatus' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.project-show');
    }
}
