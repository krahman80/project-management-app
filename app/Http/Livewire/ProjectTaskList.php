<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class ProjectTaskList extends Component
{
    public $task;
    // public $queryTask;

    protected $listeners = [
        'taskAdded' => '$refresh',
        'refreshComponent' => '$refresh'
    ];


    public function queryTask($task_id)
    {
        return $updatedTask = Task::findOrFail($task_id);
    }

    public function updateStatus($task_id)
    {
        //check if user is task owner

        // update task status to completed
        $updatedTask = $this->queryTask($task_id);
        if ($updatedTask->status !== 'completed') {
            $updatedTask->status = 'completed';
            $updatedTask->save();
            $this->emit('refreshComponent');
        }
    }

    public function deleteTask($task_id)
    {
        $deletedTask = $this->queryTask($task_id);
        $deletedTask->delete();
        $this->emit('taskStatus');
    }

    public function render()
    {
        return view('livewire.project-task-list');
    }
}
