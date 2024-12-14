@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Quick Overview</h1>

    <form action="{{ route('quick_overview.update', $overview->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Spoof the PUT method here -->

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $overview->title }}" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4" required>{{ $overview->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
        @if ($overview->image)
            <img src="{{ asset('storage/' . $overview->image) }}" alt="Image" width="100" class="mt-3">
        @endif
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>

</div>  
@endsection
