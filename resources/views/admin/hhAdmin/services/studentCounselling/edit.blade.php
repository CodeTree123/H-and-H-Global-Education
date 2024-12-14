@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Counselling</h2>
    <form action="{{ route('student-counselling.update', $counselling->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pageContent">Page Contents</label>
            <textarea name="pageContent" id="pageContent" class="form-control" rows="5" required>{{ old('pageContent', $counselling->pageContent ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>




<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize CKEditor for the description field
        CKEDITOR.replace('pageContent', {
            height: 300 // Optional: Customize height
        });
    });
</script>
@endsection
