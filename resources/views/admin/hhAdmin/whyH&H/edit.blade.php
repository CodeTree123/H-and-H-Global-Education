@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Why H&H Global Education</h1>

        <form action="{{ route('whyH&H.update', $whyHH->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $whyHH->title) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description', $whyHH->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
                
                @if($whyHH->image)
                    <div class="mt-2">
                        <label>Current Image:</label>
                        <img src="{{ asset('storage/' . $whyHH->image) }}" alt="{{ $whyHH->title }}" style="width: 100px;">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>
@endsection
