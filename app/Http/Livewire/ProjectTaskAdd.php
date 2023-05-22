<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;


class ProjectTaskAdd extends Component
{
    public $project_id;

    // for task owner
    public $users;

    public $name;
    public $description;
    public $owner_id;
    public $start_date;
    public $end_date;
    public $status;


    protected $rules = [
        'name' => 'required|min:6',
        'description' => 'required|min:10',
        // 'owner_id' => 'integer',
        'owner_id' =>  'required|not_in:0',
        'project_id' => 'integer',
        'start_date' => 'required|date_format:Y-m-d',
        'end_date' => 'required|date_format:Y-m-d|after:start_date',
        // 'status' => 'string',
        'status' => 'required|not_in:0',
    ];

    public function mount($project_id)
    {
        $this->project_id = $project_id;
        $this->users = User::role('developer')->orderBy('name', 'asc')->get();
    }

    public function saveTask()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Task::create([
            'name' => $this->name,
            'description' => $this->description,
            'owner_id' => $this->owner_id,
            'project_id' => $this->project_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'status' => $this->status
        ]);

        // $project = Project::findOrFail($this->project_id);

        $this->emit('hideModal');
        $this->emit('taskAdded');
    }



    public function render()
    {
        return view('livewire.project-task-add');
    }
}
