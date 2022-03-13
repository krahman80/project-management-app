@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">task detail</h5>
                    @include('layouts.msg')
                    
                    <table class="table align-middle table-borderless table-sm mb-5">
                        <thead class="table-light">
                            <tr>
                                <th colspan="6">
                                    <span class="text-muted">Project Name : </span>{{ $task->project->name }}
                                </th>
                            </tr>
                          <tr>
                            <th>Task Name</th>
                            <th>Start Date</th>
                            <th scope="col">Due Date&nbsp;<i class="bi bi-bell"></i></th>
                            <th>Days left</th>
                            <th>progress</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="w-25"><a href="#" class="link-primary">{{ $task->title }}</a></td>
                            <td>{{ $task->begin_date }}</td>
                            <td>{{ $task->due_date }}</td>
                            <td> ... days</td>
                            <td class="py-auto"><div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div></td>
                            <td><span class="badge text-dark {{$task->status_class}}">{{ $task->string_status }}</span></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="6">
                              <div>
                                <div>
                                <a data-bs-toggle="collapse" href="#commentCollapse-{{$task->id}}" role="button" aria-expanded="false" aria-controls="commentCollapse-{{$task->id}}"><i class="bi bi-chat-dots"></i></a>&nbsp;<a href="#"><i class="bi bi-pencil-square"></i></a>
                                </div>
                                <div class="collapse border w-75 float-end" id="commentCollapse-{{$task->id}}">
                                  <h5 class="h5 m-2">message <span class="text-muted"><i class="bi bi-chat-dots"></i></span></h5>
                                  <div class="d-flex flex-row justify-content-start p-2">
                                    <div class="w-25"><i class="bi bi-person-circle"></i>&nbsp;Jonathan Smith</div>
                                    <div class="w-75">
                                      <p class="small p-2 ms-3 mb-1 rounded" style="background-color: #f5f6f7;">Neque porro quisquam numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                      <p class="small ms-3 mb-1 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row justify-content-start p-2">
                                    <div class="w-25"><i class="bi bi-person-circle"></i>&nbsp;alex Smith</div>
                                    <div class="w-75">
                                      <p class="small p-2 ms-3 mb-1 rounded" style="background-color: #f5f6f7;">Neque porro quisquam numquam eius modi.</p>
                                      <p class="small ms-3 mb-1 rounded-3 text-muted float-end">12:00 PM | Aug 13</p>
                                    </div>
                                  </div>
                                </div>
                                  
                                  
                                </div>
                            </td>
                          </tr>
                        </tfoot>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection