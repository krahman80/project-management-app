@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Task detail</h5>
                    @include('layouts.msg')
                    
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
                            <td class="w-25">{{ $task->title }}</td>
                            <td>{{ $task->start_date->format('M d Y') }}</td>
                            <td>{{ $task->end_date->format('M d Y') }}</td>
                            <td> ... days</td>
                            <td class="py-auto"><div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: {{ $task->progress }}%;" aria-valuenow="{{ $task->progress }}" aria-valuemin="0" aria-valuemax="100">{{ $task->progress }} %</div>
                            </div></td>
                            <td><span class="badge text-dark {{$task->flag_class}}">{{ $task->flag }}</span></td>
                            <td>{{ $task->status_string }}</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="7">
                              <div>
                                {{-- <div>
                                  <a data-bs-toggle="collapse" href="#taskFormCollapse-{{$task->id}}" role="button" aria-expanded="false" aria-controls="taskFormCollapse-{{$task->id}}"><i class="bi bi-pencil-square"></i></a>&nbsp;<a data-bs-toggle="collapse" href="#commentCollapse-{{$task->id}}" role="button" aria-expanded="false" aria-controls="commentCollapse-{{$task->id}}"><i class="bi bi-chat-dots"></i></a>
                                </div> --}}
                                @include('users.components.updatetask')
                                @include('users.components.comment')
                              </div>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                      <a href="{{ route('user.mytask') }}" class="btn btn-small btn-info">back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection