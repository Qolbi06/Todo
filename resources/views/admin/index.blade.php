@extends('admin.parent')

@section('content')

<div class="container card p-3">
    <h1>Halo Admin</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Data</a>
    </div>
</div>
@endsection