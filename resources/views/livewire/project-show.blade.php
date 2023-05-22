<div class="card shadow-sm">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <div>
                {{ $project->name }}
            </div>
            <div>
                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
            </div>
        </div>

    </div>
    <div class="card-body">
        <!-- <h5 class="card-title">Light card title</h5> -->
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        {{ $project->description }}
    </div>

    <div class="card-footer bg-transparent ">
        <div>
            &#8226;&nbsp;&nbsp;<span class="text-dark small">project manager : </span>
            <span class="badge bg-secondary text-white">
                {{ $project->owner->name }}
            </span>

            &nbsp;&nbsp;&#8226;&nbsp;&nbsp;
            <span class="text-dark small">project member : </span>
            @forelse ($project->tasks as $task)
            <span class="badge bg-light text-dark">{{ $task->user->name }}</span>
            @empty
            <span class="badge bg-light text-dark">this project has no task</span>
            @endforelse

        </div>
    </div>
</div>