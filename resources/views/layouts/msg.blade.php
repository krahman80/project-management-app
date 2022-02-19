@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

@if (session('status'))
    <div class="alert alert-primary">{{ session('status') }}</div>
@endif