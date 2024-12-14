@extends('admin.layouts.app')
@section('content')


<div class="container">
    <h1>Add Branch</h1>
    <form action="{{ route('branches.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="branch_name" class="form-label">Branch Name</label>
            <input type="text" class="form-control" id="branch_name" name="branch_name" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="facebook_page" class="form-label">Facebook Page</label>
            <input type="text" class="form-control" id="facebook_page" name="facebook_page">
        </div>
        <!-- Email Section -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Location Section -->
        <div class="mb-3">
            <label for="location_id" class="form-label">Location</label>
            <select class="form-control" id="location_id" name="location_id" required>
                <option value="">Select Location</option>
                @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
        </div>
       <!-- Location Map Section (iframe) -->
<div class="mb-3">
    <label for="location_map" class="form-label">Location Map (iframe)</label>
    <textarea 
        class="form-control" 
        id="location_map" 
        name="location_map" 
        rows="3" 
        placeholder="Paste your Google Map iframe embed code here"
        required>
    </textarea>
    <small class="form-text text-muted">
        Paste the embed iframe code from Google Maps. Example:
        <code>&lt;iframe src="..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"&gt;&lt;/iframe&gt;</code>
    </small>
</div>

        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('branches.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
