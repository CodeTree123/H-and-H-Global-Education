
@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h2>Edit Country</h2>
    
    <!-- Display success or error message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Update Form -->
    <form action="{{ route('countries.update', $country->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- This sets the method to PUT for updating -->

        <div class="form-group">
            <label for="name">Country Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $country->name) }}" required>
        </div>

        <div class="form-group">
            <label for="icon">Country Icon</label>
            <input type="file" class="form-control-file" id="icon" name="icon">
            @if($country->icon)
                <img src="{{ asset('storage/' . $country->icon) }}" alt="Country Icon" width="100" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="thumbnail">Flag </label>
            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
            @if($country->thumbnail)
                <img src="{{ asset('storage/' . $country->thumbnail) }}" alt="Country Thumbnail" width="100" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="banner">Background Banner </label>
            <input type="file" class="form-control-file" id="banner" name="banner">
            @if($country->banner)
                <img src="{{ asset('storage/' . $country->banner) }}" alt="Country Banner" width="100" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $country->description) }}</textarea>
</div>


        <button type="submit" class="btn btn-primary">Update Country</button>
        <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>




<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize CKEditor for the description field
        CKEDITOR.replace('description', {
            height: 300 // Optional: Customize height
        });
    });
</script>
@endsection


