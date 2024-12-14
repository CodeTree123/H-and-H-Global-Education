@extends('admin.layouts.app')

@section('content')

<style>
    .content-section {
        margin-top: 20px;
        font-family: Arial, sans-serif;
        position: relative;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .content-section h1 {
        font-size: 28px;
        color: #333;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .info-row {
        display: flex;
        margin-bottom: 20px;
        align-items: flex-start;
    }

    .info-row label {
        font-weight: bold;
        width: 200px;
        color: #555;
        flex-shrink: 0;
    }

    .info-row p {
        margin: 0;
        color: #333;
        line-height: 1.6;
    }

    .content-description {
        margin-bottom: 30px;
    }

    .key-details {
        margin-top: 40px;
    }

    .key-details h2 {
        font-size: 22px;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .table-container table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table-container table th,
    .table-container table td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .table-container table th {
        background-color: #f2f2f2;
    }

    .table-container table td {
        background-color: #fafafa;
    }

    .table-container table tr:nth-child(even) td {
        background-color: #e9f5ff;
    }

    .course-icons {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 10px;
    }

    .course-icons img {
        width: 100px;
        height: auto;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .course-icons img:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 25px;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        margin-top: 30px;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<div class="container content-section">
    <div class="course-icons">
            <img   src="{{asset('images/' .$course->university->image)}}"
            alt="Course Icon">
    </div>
    <h1>Course Name: {{ $course->name }}</h1>

    <div class="info-row">
        <label>1. University:</label>
        <p>{{ $course->university->name }}</p>
    </div>
    <div class="info-row">
        <label>2. Course Type:</label>
        <p>{{ $course->courseType->name }}</p>
    </div>

    <div class="info-row">
        <label>3. Study Level:</label>
        <p>{{ $course->studyLevel->name }}</p>
    </div>

    <div class="info-row content-description">
        <label>4. Description:</label>
        <p>{!! $course->description !!}</p>
    </div>

    <div class="info-row content-description">
        <label>5. Overview:</label>
       {!! $course->overview !!}
    </div>

    <div class="key-details">
        <h2>Key Dates and Fees</h2>
        <div class="table-container">
            {!! $course->tution_fees !!}
        </div>
    </div>

    <div class="info-row">
        <label>6. Duration:</label>
        <p>{{ $course->duration }}</p>
    </div>

    <div class="info-row">
    <label>7. Pathway Available:</label>
    <p>{{ $course->pathway_available === 'yes' ? 'Yes' : 'No' }}</p>
</div>


    <div class="info-row">
        <label>8. Price:</label>
        <p>${{ number_format(floatval($course->price)) }}</p>
        </div>
    <div class="d-flex flex-column">
    <a href="{{ route('courses.index') }}" class="btn btn-primary mb-2">Back to Courses</a>
    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
</div>

</div>

@endsection
