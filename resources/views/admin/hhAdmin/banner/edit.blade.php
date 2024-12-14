@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Banner</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <div class="form-group">
                    <label for="title">Banner Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $banner->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Banner Description</label>
                    <textarea name="description" class="form-control">{{ $banner->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Banner Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($banner->image)
                        <img src="{{ asset('storage/'.$banner->image) }}" width="100">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update Banner</button>
            </form>
        </div>
    </div>
</div>
@endsection
