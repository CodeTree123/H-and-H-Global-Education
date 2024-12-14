@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Course Type</h1>
        <form action="{{ route('course-types.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Save</button>
        </form>
    </div>
@endsection
