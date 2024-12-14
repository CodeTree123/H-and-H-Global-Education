@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Banner</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Banner Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Banner Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Banner Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Banner</button>
            </form>
        </div>
    </div>
</div>
@endsection
