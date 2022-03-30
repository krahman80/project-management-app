@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title">Task List</h5> --}}
                    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
                      <div class="container-fluid">
                        <a class="navbar-brand" href="#">Task List</a>
                        <div>
                          <form class="d-flex" method="post" action="{{ route('user.mytask.search') }}">
                            @csrf
                            <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="search" name="keyword">
                            <select class="form-select form-select-sm me-2" aria-label=".form-select-sm example" name="status">
                              <option value="" selected>status</option>
                              <option value="0">in progress</option>
                              <option value="1">pending</option>
                              <option value="2">completed</option>
                            </select>
                            <button class="btn btn-sm btn-primary text-black" type="submit">Search</button>
                          </form>
                        </div>
                      </div>
                    </nav>
                    @include('layouts.msg')
                    @forelse ($tasks as $task)

                    <table class="table align-middle table-borderless table-sm mb-5">
                        <thead class="table-light">
                            <tr>
                                <th colspan="7">
                                    <span class="text-muted">Project Name : </span>{{ $task->project->name }}
                                </th>
                            </tr>
                          <tr>
                            <th>Task Name</th>
                            <th>Start Date</th>
                            <th scope="col">Due Date&nbsp;<i class="bi bi-bell"></i></th>
                            <th>Days left</th>
                            <th>progress</th>
                            <th scope="col">flag</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="w-25"><a href="{{ route('user.mytask.detail',['id' => $task->id])}}" class="border-0 p-0 m-0">{{ $task->title }}</a></td>
                            <td>{{ $task->start_date->format('M d Y') }}</td>
                            <td>{{ $task->end_date->format('M d Y') }}</td>
                            <td> ... days</td>
                            <td class="py-auto"><div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $task->progress }}%;" aria-valuenow="{{ $task->progress }}" aria-valuemin="0" aria-valuemax="100">{{ $task->progress }} %</div>
                            </div></td>
                            <td style="width: 90px;"><span class="badge text-dark {{$task->flag_class}}">{{ $task->flag }}</span></td>
                            <td style="width: 100px;">{{ $task->status_string }}</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="7">
                            </td>
                          </tr>
                        </tfoot>
                      </table>

                    @empty
                        <div>Task Not Found</div>
                    @endforelse
                    <div class="d-flex justify-content-center">
                      {{$tasks->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection