@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Greeting</h1>
    <form action="{{ route('greetings.update', $greeting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $greeting->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $greeting->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if($greeting->image)
                <div>
                    <img src="{{ asset('storage/' . $greeting->image) }}" alt="Greeting Image" style="width: 150px; margin-bottom: 10px;">
                </div>
            @endif
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
