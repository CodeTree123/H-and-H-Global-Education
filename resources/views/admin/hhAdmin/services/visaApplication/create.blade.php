@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Add New Visa Application</h2>
    <form action="{{ route('visa-application.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pageContent">Page Contents</label>
            <textarea name="pageContent" id="pageContent" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Save</button>
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
