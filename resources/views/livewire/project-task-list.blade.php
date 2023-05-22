<div class="col">
    <div class="card border mb-4">

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5><a href="#" class="link-primary">{{ $task->name }}</a></h5>
                <span class="text-muted small" wire:loading.delay.longer>Loading...</span>
            </div>

            <p>
                <span class="text-dark">status&nbsp;:&nbsp;</span><span
                    class="fst-italic {{ $task->status == 'completed' ? 'text-success' : 'text-warning' }}">{{
                    $task->status }}</span>&nbsp;&nbsp;&#8226;&nbsp;&nbsp;<span class="text-dark">start
                    date&nbsp;
                    :&nbsp;</span><span class="text-success">{{
                    $task->start_date->toDateString() }}</span>&nbsp;&nbsp;&#8226;&nbsp;&nbsp;<span
                    class="text-dark">end
                    date&nbsp;
                    :&nbsp;</span><span class="text-success">{{
                    $task->end_date->toDateString() }}</span>
            </p>
            {{-- <span class="badge rounded-pill bg-primary">{{ $task->status}}</span> --}}
            <p class="card-text mt-3">{{ $task->description }}</p>
        </div>
        <div class="card-footer bg-transparent border border-0">
            <div class="d-flex justify-content-between">
                <div>
                    {{-- <span class="text-secondary small">task owner : </span> --}}
                    <a href="#" class="text-link"><span class="badge rounded-pill bg-info">
                            {{ $task->user->name }}
                        </span></a>
                </div>
                <div>
                    <button class="btn btn-sm" type="button" wire:click.prevent="updateStatus({{ $task->id }})">
                        <i class="bi bi-journal-check text-success"></i>
                    </button>&nbsp;
                    <button class="btn btn-sm" type="button"
                        wire:click.defer="$emit('showModal', 'project-task-edit', '{{ $task->id }}')">
                        <i class="bi bi-pencil text-primary"></i>
                    </button>&nbsp;
                    <button class="btn btn-sm" type="button" wire:click.prevent="deleteTask({{ $task->id }})"><i
                            class="bi bi-x-square text-danger"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>