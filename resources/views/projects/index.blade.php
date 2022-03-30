@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title d-flex justify-content-between align-items-center">
                        List Project 
                        {{-- <a href="#" class="link"><small><i class="bi bi-clipboard-plus">&nbsp;</i>Add Project</small></a> --}}
                        {{-- <button type="button" class="btn btn-sm btn-primary">Button</button> --}}
                        <button type="button" class="btn btn-labeled btn-light text-dark">
                            <span class="btn-label"><i class="bi bi-clipboard-plus me-2"></i></span>Add project</button>
                    </h5>
                    @include('layouts.msg')
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Flag</th>
                            <th scope="col">Update</th>
                          </tr>
                        </thead>
                        <tbody>

                        @forelse ($projects as $key => $project)
                            <tr>
                                <th scope="row">{{ $key + $projects->firstItem() }}.</th>
                                <td><a href="{{ route('project.show', ['id' => $project->id])}}">{{ $project->name }}</a></td>
                                <td>{{ $project->status_string }}</td>
                                <td>{{ $project->deadline->toDayDateTimeString()}}</td>
                                <td style="width: 90px;"><span class="badge text-dark {{$project->flag_class}}">{{ $project->flag }}</span></td>
                                <td>update</td>
                            </tr>
                        @empty
                            <tr>
                                <th scope="row">1.</th>
                                <td colspan="3">No data available</td>
                            </tr>
                        @endforelse
                        </tbody>
                      </table>
                      <div class="d-flex justify-content-center">
                        {{$projects->links()}}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection