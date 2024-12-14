@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Branch</h1>
    <form action="{{ route('branches.update', $branch->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="branch_name" class="form-label">Branch Name</label>
            <input type="text" class="form-control" id="branch_name" name="branch_name" value="{{ $branch->branch_name }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $branch->address }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $branch->phone }}" required>
        </div>

        <div class="mb-3">
            <label for="facebook_page" class="form-label">Facebook Page</label>
            <input type="text" class="form-control" id="facebook_page" name="facebook_page" value="{{ $branch->facebook_page }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $branch->email }}">
        </div>

        <div class="mb-3">
            <label for="location_map" class="form-label">Location Map (Iframe URL)</label>
            <input type="text" class="form-control" id="location_map" name="location_map" value="{{ $branch->location_map }}">
        </div>

        <div class="mb-3">
            <label for="location_id" class="form-label">Location</label>
            <select class="form-control" id="location_id" name="location_id" required>
                @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $branch->location_id == $location->id ? 'selected' : '' }}>
                    {{ $location->name }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
