@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Roles</h5>
                    <div class="float-right"><a href="{{ route('admin.roles.create') }}"><i class="bi bi-clipboard-plus">&nbsp;</i>Add Role</a></div>
                    @php
                     $i = 1;   
                    @endphp
                    @include('layouts.msg')
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Role</th>
                            <th scope="col">Guards</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($roles as $role)
                            <tr>
                                <th scope="row">{{ $i++ }}.</th>
                                <td>{{ $role->name }}</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('admin.roles.edit',['id' => $role->id])}}">edit</a>
                                </td>
                              </tr>
                        @empty
                            <tr>
                                <th scope="row">1</th>
                                <td colspan="3">No data available</td>
                            </tr>
                        @endforelse
                        </tbody>
                      </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection