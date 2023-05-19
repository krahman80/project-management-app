<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        // get my task
        $tasks = Task::where('owner_id', auth()->id())->get();

        // get my project
        $projects = Project::whereHas('tasks', function (Builder $query) {
            $query->where('owner_id', auth()->id());
        })->get();

        return view('livewire.dashboard', ['tasks' => $tasks, 'projects' => $projects]);
    }
}
