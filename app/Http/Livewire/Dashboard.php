<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $tasks = Task::where('owner_id', auth()->id())->get();
        return view('livewire.dashboard', ['tasks' => $tasks]);
    }
}
