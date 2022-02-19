@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Permissions</h5>
                    <div class="float-right"><a href="{{ route('admin.permissions.create') }}"><i class="bi bi-clipboard-plus">&nbsp;</i>Add Permission</a></div>
                    @php
                     $i = 1;   
                    @endphp
                    @include('layouts.msg')
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Guards</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($permissions as $permission)
                            <tr>
                                <th scope="row">{{ $i++ }}.</th>
                                <td>{{ $permission->name }}</td>
                                <td></td>
                                <td><a href="{{ route('admin.permissions.edit',['id' => $permission->id])}}">edit</a>
                                    <a href="#" onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();">delete</a>
                                    <form id="delete-form" class="d-none" action="{{ route('admin.permissions.delete', ['id' => $permission->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                              </tr>
                        @empty
                            <tr>
                                <th scope="row">1.</th>
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