<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class ProjectTaskEdit extends Component
{
    public Task $task;
    public $users;

    protected $rules = [
        'task.name' => 'required|min:6',
        'task.description' => 'required|min:10',
        'task.owner_id' =>  'required|not_in:0',
        'task.start_date' => 'required|date_format:Y-m-d',
        'task.end_date' => 'required|date_format:Y-m-d|after:task.start_date',
        'task.status' => 'required|not_in:0',
    ];

    public function mount($task_id)
    {
        $this->task = Task::findOrFail($task_id);
        $this->users = User::role('developer')->orderBy('name', 'asc')->get();
        // dd($this->task);
    }


    public function updateTask()
    {
        $this->validate();

        $this->task->save();

        $this->emit('hideModal');
        $this->emit('taskAdded');
    }

    public function render()
    {
        return view('livewire.project-task-edit');
    }
}
