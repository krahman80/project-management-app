<div class="row mt-4">
    <div class="col-sm-10">
        <h3 class="text-left mt-5 mb-4">Dashboard</h3>
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>Task list</div>
                            {{-- <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div> --}}
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="input-group my-2 w-50">
                            <input type="text" class="form-control form-control-sm" placeholder="keyword"
                                aria-label="keyword" aria-describedby="button-addon2">
                            <button class="btn btn-sm btn-outline-secondary" type="button"
                                id="button-addon2">Button</button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped border border-1 small mt-3 table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">desc</th>
                                        <th scope="col">project name</th>
                                        <th scope="col">start</th>
                                        <th scope="col">end</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($tasks as $task)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}.</th>
                                        <td><a href="{{ $task->id }}" class="link-primary">{{ $task->name }}</a></td>
                                        <td>{{ Str::limit($task->description, 50) }}</td>
                                        <td>{{ $task->project->name }}</td>
                                        <td>{{ $task->start_date->toDateString() }}</td>
                                        <td>{{ $task->end_date->toDateString() }}</td>
                                        <td>{{ $task->status }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th scope="row" colspan="6">No task found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                        {{-- You are logged in! --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <h3 class="mt-5 mb-4">My Project</h3>
        <ul class="list-group list-group-flush">
            @forelse ($projects as $project)
            <li class="list-group-item"><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{
                    $project->name }}</a></li>
            @empty
            <li class="list-group-item">No Project found.</li>
            @endforelse
        </ul>
        {{-- <form action="">
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>
            </div>
        </form> --}}
    </div>
</div>