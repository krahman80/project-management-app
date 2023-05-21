<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProjectTaskList extends Component
{
    public $task;

    public function render()
    {
        return view('livewire.project-task-list');
    }
}
