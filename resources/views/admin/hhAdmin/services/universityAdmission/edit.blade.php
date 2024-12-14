@extends('admin.layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('university-admissions.update', $admission->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>
        <div class="form-group">
            <label>Banner Text</label>
            <input type="text" name="bannerText" class="form-control" value="{{ $admission->bannerText }}" required>
        </div> -->
        <div class="form-group">
            <label>According Title</label>
            <input type="text" name="accordingTitle" class="form-control" value="{{ $admission->accordingTitle }}" required>
        </div>
        <div class="form-group">
            <label>According Content</label>
            <input type="text" name="accordingcontent" class="form-control" value="{{ $admission->accordingcontent }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
