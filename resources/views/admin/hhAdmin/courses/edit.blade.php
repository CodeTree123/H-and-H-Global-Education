@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Course</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="university_id" class="form-label">University</label>
                <select name="university_id" class="form-control" required>
                    <option value="">Select University</option>
                    @foreach($universities as $university)
                        <option value="{{ $university->id }}" {{ $university->id == $course->university_id ? 'selected' : '' }}>
                            {{ $university->name }}
                        </option>
                    @endforeach
                </select>
                @error('university_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $course->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Course Description</label>
                <textarea name="description" class="form-control" id="description" required>{{ old('description', $course->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="overview" class="form-label">Overview</label>
                <textarea id="overview" name="overview" class="form-control" placeholder="Enter Overview">{{ old('overview', $course->overview) }}</textarea>
                @error('overview')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tution_Fee" class="form-label">Tuition Fees</label>
                <textarea id="tution_Fee" name="tution_fees" class="form-control" placeholder="Enter tuition fees and scholarship details">{{ old('tution_fees', $course->tution_fees) }}</textarea>
                @error('tution_fees')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="course_type_id" class="form-label">Course Type</label>
                <select name="course_type_id" class="form-control" required>
                    <option value="">Select Course Type</option>
                    @foreach($courseTypes as $courseType)
                        <option value="{{ $courseType->id }}" {{ $courseType->id == $course->course_type_id ? 'selected' : '' }}>
                            {{ $courseType->name }}
                        </option>
                    @endforeach
                </select>
                @error('course_type_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="study_level_id" class="form-label">Study Level</label>
                <select name="study_level_id" class="form-control" required>
                    <option value="">Select Study Level</option>
                    @foreach($studyLevels as $studyLevel)
                        <option value="{{ $studyLevel->id }}" {{ $studyLevel->id == $course->study_level_id ? 'selected' : '' }}>
                            {{ $studyLevel->name }}
                        </option>
                    @endforeach
                </select>
                @error('study_level_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pathway_available" class="form-label">Pathway Available</label>
                <select name="pathway_available" class="form-control" required>
                    <option value="">Select Option</option>
                    <option value="yes" {{ old('pathway_available', $course->pathway_available) == 'yes' ? 'selected' : '' }}>Yes</option>
                    <option value="no" {{ old('pathway_available', $course->pathway_available) == 'no' ? 'selected' : '' }}>No</option>
                </select>
                @error('pathway_available')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" step="0.01" placeholder="Enter price" value="{{ old('price', $course->price) }}" required>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize CKEditor for the description field
            CKEDITOR.replace('description', {
                height: 300
            });

            // Initialize CKEditor for the tuition fees field
            CKEDITOR.replace('tution_Fee', {
                height: 300
            });

            // Initialize CKEditor for the overview field
            CKEDITOR.replace('overview', {
                height: 300
            });
        });
    </script>
@endsection
