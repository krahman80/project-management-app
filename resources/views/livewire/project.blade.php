<div class="row mt-4">
    <div class="col-sm-10 mx-auto">
        <h3 class="text-left mt-5 mb-4">Dashboard</h3>
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>{{ $project->name }}</div>
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

                </div>
            </div>
        </div>


        <div class="row row-cols-1 ">
            <div class="col mt-4">
                <h4 class="card-body">Project Tasks</h4>
            </div>

            @forelse ($project->tasks as $task)
            <div class="col">
                <div class="card border border-0">

                    <div class="card-body">
                        <h5 class="card-title"><a href="#" class="link-secondary">{{ $task->name }}</a></h5>
                        <p class="card-text">{{ $task->description }}</p>
                    </div>
                    <div class="card-footer bg-transparent border border-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <span class="badge rounded-pill bg-dark">user1</span>
                            </div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <div class="card border border-0">
                    No Task found
                </div>
            </div>
            @endforelse

        </div>
    </div>
</div>