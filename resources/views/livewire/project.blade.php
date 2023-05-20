<div class="row mt-4">
    <div class="col-sm-10 mx-auto">
        <h3 class="text-left mt-5 mb-4">Project Detail</h3>
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                @foreach ($projects as $project)
                                {{ $project->name }}
                                @endforeach

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

                        @foreach ($projects as $project)
                        {{ $project->description }}
                        @endforeach
                    </div>

                    <div class="card-footer bg-transparent ">
                        <div><span class="text-secondary small">project member : </span>
                            @foreach ($projects as $project)
                            @forelse ($project->tasks as $task)
                            <span class="badge bg-light text-dark">{{ $task->user->name }}</span>
                            @empty
                            <span class="badge bg-light text-dark">this project has no task owner</span>
                            @endforelse
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row row-cols-1 ">
            <div class="col mt-5 mb-3">
                <div class="card-footer border border-0">
                    <div class="d-flex justify-content-between">

                        <h4 class="card-header">Project Tasks</h4>
                        <div class="fs-4 me-2">
                            <a href="#"><i class="bi bi-plus-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            @forelse ($projects as $project)

            @foreach ($project->tasks as $task)

            <div class="col">
                <div class="card border mb-4">

                    <div class="card-body">
                        <h5>
                            <a href="#" class="link-primary">{{ $task->name }}</a>
                        </h5>
                        <p>
                            <span class="text-muted">status&nbsp;:&nbsp;</span><span class="text-danger">{{
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
                                <a href="#" class="link-success"><i class="bi bi-journal-check"></i></a>&nbsp;
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

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