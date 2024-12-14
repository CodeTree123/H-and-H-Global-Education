@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit University</h1>
        <form action="{{ route('universities.update', $university->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="country_id">Country</label>
                <select name="country_id" class="form-control" required>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}" {{ $country->id == $university->country_id ? 'selected' : '' }}>
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">University Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $university->name) }}" required>
            </div>
            <div class="form-group">
                <label for="image">University Image</label>
                <input type="file" class="form-control" name="image" id="image" accept="image/*">
                @if($university->image)
                    <div class="mt-2">
                        <img src="{{ asset('images/' . $university->image) }}" alt="University Image" width="150">
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="university_banner">University Banner</label>
                <input type="file" class="form-control" name="university_banner" id="university_banner" accept="image/*">
                @if($university->university_banner)
                    <div class="mt-2">
                        <img src="{{ asset('banners/' . $university->university_banner) }}" alt="University Banner" width="150">
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" id="location" value="{{ old('location', $university->location) }}">
            </div>
            <div class="form-group">
                <label for="overview">Overview</label>
                <textarea class="form-control" name="overview" id="overview">{{ old('overview', $university->overview) }}</textarea>
            </div>
            <div class="form-group">
                <label for="entry_requirements">Entry Requirements</label>
                <textarea class="form-control" name="entry_requirements" id="entry_requirements">{{ old('entry_requirements', $university->entry_requirements) }}</textarea>
            </div>
            <div class="form-group">
                <label for="english_language">English Language</label>
                <textarea class="form-control" name="english_language" id="english_language">{{ old('english_language', $university->english_language) }}</textarea>
            </div>
            <div class="form-group">
                <label for="tuition_fees">Tuition Fees</label>
                <textarea class="form-control" name="tuition_fees" id="tuition_fees">{{ old('tuition_fees', $university->tuition_fees) }}</textarea>
            </div>
            <div class="form-group">
                <label for="scholarships">Scholarships</label>
                <textarea class="form-control" name="scholarships" id="scholarships">{{ old('scholarships', $university->scholarships) }}</textarea>
            </div>
        
            <button type="submit" class="btn btn-success">Save Changes</button>
        </form>
    </div>
@endsection

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize CKEditor for the overview field
        CKEDITOR.replace('overview', {
            height: 300
        });

        // Initialize CKEditor for the entry_requirements field
        CKEDITOR.replace('entry_requirements', {
            height: 300
        });

        // Initialize CKEditor for the english_language field
        CKEDITOR.replace('english_language', {
            height: 300
        });

        // Initialize CKEditor for the tuition_fees field
        CKEDITOR.replace('tuition_fees', {
            height: 300
        });

        // Initialize CKEditor for the scholarships field
        CKEDITOR.replace('scholarships', {
            height: 300
        });
    });
</script>