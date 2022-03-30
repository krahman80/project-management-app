@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List User</h5>
                    @include('layouts.msg')
                    {{-- <div class="float-right"><a href="{{ route('admin.roles.create') }}"><i class="bi bi-clipboard-plus">&nbsp;</i>Assign Role</a></div> --}}
                    @php
                     $i = 1;   
                    @endphp
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $i++ }}.</th>
                                <td>{{ $user->name }}</td>
                                <td>                                    
                                    @forelse ($user->getRoleNames() as $key => $item)
                                    {{ $item }}
                                    @empty
                                        <a href="{{ route('admin.roles.assign',['id' => $user->id]) }}">assign role</a>
                                    @endforelse</td>
                                <td>&nbsp;
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