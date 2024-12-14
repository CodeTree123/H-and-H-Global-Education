@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course Type</h1>
        <form action="{{ route('course-types.update', $courseType->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $courseType->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
@endsection
