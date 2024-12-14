@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1>Add New Testimonial</h1>
    <form action="{{ route('students_says.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-4">Save Testimonial</button>
    </form>
</div>
@endsection
