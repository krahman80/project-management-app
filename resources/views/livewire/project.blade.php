<div class="row mt-4">
    <div class="col-sm-10 mx-auto">
        <h3 class="text-left mt-5 mb-4">Project Detail</h3>

        {{-- project detail --}}
        <div class="row row-cols-1">
            <div class="col">
                @foreach ($projects as $project)
                @livewire('project-show', ['project' => $project], key($project->id))
                @php
                $project_id = $project->id;
                @endphp
                @endforeach
            </div>
        </div>

        {{-- project task detail --}}
        <div class="row row-cols-1 ">
            <div class="col mt-5 mb-3">
                <div class="card-footer border border-0">
                    <div class="d-flex justify-content-between">

                        <h4 class="card-header">Project Tasks</h4>
                        <div class="fs-4 me-2">
                            {{-- <a href="#" class="link-primary"
                                wire:click.defer="$emit('showModal', 'ProjectTaskAdd', '{{ $project_id }}')"><i
                                    class="bi bi-plus-lg"></i></a> --}}
                            <button class="btn btn-sm btn-light" type="button"
                                wire:click="$emit('showModal', 'project-task-add', '{{ $project_id }}')">
                                <i class="bi bi-plus-lg"></i>&nbsp;New Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($projects as $project)
            @foreach ($project->tasks as $task)

            @livewire('project-task-list', ['task' => $task], key($task->id))

            @endforeach
            @endforeach


        </div>
    </div>
</div>