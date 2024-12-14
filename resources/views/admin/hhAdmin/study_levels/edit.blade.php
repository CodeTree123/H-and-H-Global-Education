@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Study Level</h1>
        <form action="{{ route('study-levels.update', $studyLevel->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $studyLevel->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
