@extends('admin.layouts.app')
@section('content')




<div class="container">
        <h2>Add New University Partner</h2>
        <form action="{{ route('university_partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="image" class="form-label">University Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Save Partner</button>
        </form>
    </div>




@endsection