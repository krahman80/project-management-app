@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Roles</h5>
                    <form class="g-3" method="POST" action="{{ route('admin.roles.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="role" class="col-md-2 col-form-label">Role Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="role" name="name">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Permissions</legend>
                            <div class="col-sm-10">
                                @foreach ($permissions as $item)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="permissionCheck" name="permission[]" value="{{ $item->id }}">
                                    <label class="form-check-label" for="permissionCheck">
                                        {{ $item->name }}
                                    </label>                                    
                                </div>
                                @endforeach
                            </div>
                          </fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-3 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Save Role</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection