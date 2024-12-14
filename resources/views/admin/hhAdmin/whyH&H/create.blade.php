@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Create Why H&H Global Edu</h1>

        <form action="{{ route('whyH&H.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
