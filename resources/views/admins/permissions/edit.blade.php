@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Update Permission</h5>
                    <form class="g-3" action="{{ route('admin.permissions.update', $permission->id) }}" method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row mb-3">
                            <label for="permission" class="col-md-2 col-form-label">Permission Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="permission" name="name" value="{{ $permission->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Save Permission</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection