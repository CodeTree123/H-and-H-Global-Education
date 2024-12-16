@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="university_id" class="form-label">University</label>
                <select name="university_id" class="form-control" required>
                    <option value="">Select University</option>
                    @foreach($universities as $university)
                        <option value="{{ $university->id }}">{{ $university->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
    <label for="description" class="form-label">Course Description</label>
    <textarea id="description" name="description" class="form-control" required></textarea>
</div>
            <div class="mb-3">
    <label for="overview" class="form-label">Overview</label>
    <textarea id="overview" name="overview" class="form-control" placeholder="Enter Overview"></textarea>
</div>
                <div class="mb-3">
    <label for="tution_Fee" class="form-label">Tuition Fees</label>
    <textarea id="tution_Fee" name="tution_fees" class="form-control" placeholder="Enter tuition fees and scholarship details"></textarea>
</div>

            <div class="mb-3">
                <label for="course_type_id" class="form-label">Course Type</label>
                <select name="course_type_id" class="form-control" required>
                    <option value="">Select Course Type</option>
                    @foreach($courseTypes as $courseType)
                        <option value="{{ $courseType->id }}">{{ $courseType->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="study_level_id" class="form-label">Study Level</label>
                <select name="study_level_id" class="form-control" required>
                    <option value="">Select Study Level</option>
                    @foreach($studyLevels as $studyLevel)
                        <option value="{{ $studyLevel->id }}">{{ $studyLevel->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" class="form-control">
            </div>

                        <div class="mb-3">
                <label for="pathway_available" class="form-label">Pathway Available</label>
                <select name="pathway_available" class="form-control" required>
                    <option value="">Select Option</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
         
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" step="0.01" placeholder="Enter price" required>
            </div>

            <div class="mb-3">
                <label for="key_facts" class="form-label">Key Facts</label>
                <input type="text" name="key_facts" class="form-control" step="0.01" placeholder="Enter Keys" required>
            </div>
            
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <!-- for more info  -->
      
                
            <button type="submit" class="btn btn-primary">Save</button>
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
