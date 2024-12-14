@extends('admin.layouts.app')

@section('content')

<div class="container">
    <h1>Add New Country</h1>
    <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Country Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="file" class="form-control" id="icon" name="icon">
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label">Flag Or Gif</label>
            <input type="file" class="form-control" id="thumbnail" name="thumbnail">
        </div>


        <div class="mb-3">
            <label for="banner" class="form-label">Background Banner</label>
            <input type="file" class="form-control" id="banner" name="banner">
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Country</button>
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
