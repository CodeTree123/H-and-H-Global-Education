@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Testimonial</h1>
    <form action="{{ route('students_says.update', $studentSay) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $studentSay->title }}" required>
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5" required>{{ $studentSay->description }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($studentSay->image)
                <p>Current Image:</p>
                <img src="{{ asset('storage/'.$studentSay->image) }}" alt="Current Image" style="width: 50px; height: 50px;">
            @endif
        </div>
        <button type="submit" class="btn btn-success mt-4">Update Testimonial</button>
    </form>
</div>
@endsection
