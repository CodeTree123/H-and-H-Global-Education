@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary">Edit Course Information</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Course Details</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('course.more.info.edit.post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $infos->id }}">
                        
                        <div class="form-group mb-4">
                            <label for="icon" class="form-label">Course Icon</label>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="icon" id="icon">
                            </div>
                            @if($infos->icon)
                                <img src="{{ asset($infos->icon) }}" class="rounded shadow-sm" style="width: 150px; height: auto;" alt="Icon">
                            @endif
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5">{{ $infos->description }}</textarea>
                        </div>
                        
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    /* General Card Styling */
    .card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .card-header {
        border-bottom: 1px solid #d6d6d6;
    }

    /* Form Elements */
    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 6px;
    }

    /* Image Styling */
    img {
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 8px;
    }

    /* Button Styling */
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
</style>
@endsection
