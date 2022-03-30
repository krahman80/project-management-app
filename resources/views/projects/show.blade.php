@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title">
                                Project Name : <span class="text-muted">{{ $project->name }}</span> 
                            </h4>
                            <p class="text-dark">
                        
                                Project Status : {{ $project->status_string }}<br/>
                                Project Deadline : {{ $project->deadline->toDayDateTimeString()}}<br/>
                                Project Flag : <span class="badge text-dark {{$project->flag_class}}">{{ $project->flag }}</span>
                            </p>
        
                        </div>
                        <div class="col-md-6">
                            <h4 class="card-title">Update project status</h5>
                            <form method="post" action="" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="row mb-1">
                                  <label for="deadline" class="col-sm-3 form-label">Deadline</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control form-control-sm" name="progress" id="deadline" value="{{ $project->deadline }}">
                                  </div>
                                </div>
                                <div class="row mb-1">
                                  <label for="inputStatus" class="col-sm-3 form-label">Status</label>
                                  <div class="col-sm-9">
                                    <select class="form-select form-select-sm" id="inputStatus" name="status">
                                      <option value="0">In progress</option>
                                      <option value="0" {{$project->status == 0  ? 'selected' : ''}}>In progress</option>
                                      <option value="1" {{$project->status == 1  ? 'selected' : ''}}>Pending</option>
                                      <option value="2" {{$project->status == 2  ? 'selected' : ''}}>Completed</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row mb-1 mt-1">
                                  <div class="col-sm-3">&nbsp;</div>
                                  <div class="col-sm-9 mt-1"><button type="submit" class="btn btn-sm btn-primary w-100 text-white">update project</button></div>
                                </div>
                              </form>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-11">

                            <h5>Project's Task</h5>
                            <table class="table align-middle table-borderless table-sm mb-5">
                                <thead class="table-light">
                                  <tr>
                                    <th>Task Name</th>
                                    <th>Task Owner</th>
                                    <th>Start Date</th>
                                    <th scope="col">Due Date&nbsp;<i class="bi bi-bell"></i></th>
                                    <th>Days left</th>
                                    <th>progress</th>
                                    <th scope="col">Flag</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
        
                                  @forelse ($project->tasks as $key => $task)
                                    <tr>
                                        <td class="w-25"><a href="#" class="border-0 p-0 m-0">{{ $task->title }}</a></td>
                                        <td><i class="bi bi-file-person"></i> {{ $task->user->name }}</td>
                                        <td>{{ $task->start_date->format('M d Y') }}</td>
                                        <td>{{ $task->end_date->format('M d Y') }}</td>
                                        <td> ... days</td>
                                        <td class="py-auto"><div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $task->progress }}%;" aria-valuenow="{{ $task->progress }}" aria-valuemin="0" aria-valuemax="100">{{ $task->progress }} %</div>
                                        </div></td>
                                        <td style="width: 90px;"><span class="badge text-dark {{$task->flag_class}}">{{ $task->flag }}</span></td>
                                        <td style="width: 100px;">{{ $task->status_string }}</td>
                                    </tr>
                                      
                                  @empty
                                    <tr>
                                        <td colspan="8">No data</td>
                                    </tr>
                                  @endforelse
        
                                </tbody>
                              </table>
        
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection