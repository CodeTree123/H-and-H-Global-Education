@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h1>Edit Location</h1>
    <form action="{{ route('locations.update', $location->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Location Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('locations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection

