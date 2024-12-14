@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Edit Application</h1>
    <form action="{{ route('globalApply.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- First Name -->
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $application->first_name }}" required>
        </div>

        <!-- Last Name -->
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $application->last_name }}" required>
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $application->email }}" required>
        </div>

        <!-- Phone -->
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $application->phone }}" required>
        </div>

        <!-- Country -->
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" id="country" name="country_id" required>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}" {{ $application->country_id == $country->id ? 'selected' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- University -->
        <div class="form-group">
            <label for="university">University</label>
            <select class="form-control" id="university" name="university_id" required>
                @foreach($universities as $university)
                    <option value="{{ $university->id }}" {{ $application->university_id == $university->id ? 'selected' : '' }}>
                        {{ $university->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Course -->
        <div class="form-group">
            <label for="course">Course</label>
            <select class="form-control" id="course" name="course_id" required>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $application->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Mode of Study -->
        <div class="form-group">
            <label for="mode_of_study">Mode of Study</label>
            <select class="form-control" id="mode_of_study" name="mode_of_study" required>
                <option value="Full-time" {{ $application->mode_of_study == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="Part-time" {{ $application->mode_of_study == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                <option value="Online" {{ $application->mode_of_study == 'Online' ? 'selected' : '' }}>Online</option>
            </select>
        </div>

        <!-- Additional Fields -->
        <div class="form-group">
            <label for="additional_info">Additional Information</label>
            <textarea class="form-control" id="additional_info" name="additional_info" rows="3">{{ $application->additional_info }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('globalApply.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
