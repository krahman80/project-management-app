@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Assign User</h5>
                    <form class="g-3" method="POST" action="{{ route('admin.roles.store.assign') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="user" class="col-md-2 col-form-label">User Name</label>
                            <div class="col-md-10">
                                <select class="form-select form-select-sm" name="user">
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-2 col-form-label">Role</label>
                            <div class="col-md-10">
                                <select class="form-select form-select-sm" name="role">
                                    @forelse ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @empty
                                        <option selected>No role find...</option>                                        
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Assign User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection