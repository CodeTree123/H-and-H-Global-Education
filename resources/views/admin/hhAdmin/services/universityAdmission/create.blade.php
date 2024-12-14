@extends('admin.layouts.app')

@section('content')
<div class="container">
<form action="{{ route('university-admissions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Banner Text</label>
        <input type="text" name="bannerText" class="form-control" required>
    </div> -->
    <div class="form-group">
        <label>According Title</label>
        <input type="text" name="accordingTitle" class="form-control" required>
    </div>
    <div class="form-group">
        <label>According Content</label>
        <input type="text" name="accordingcontent" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>

</div>
@endsection
