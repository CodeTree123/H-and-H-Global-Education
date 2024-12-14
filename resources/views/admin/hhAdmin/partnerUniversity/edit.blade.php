@extends('admin.layouts.app')
@section('content')




<div class="container">
        <h2>Edit University Partner</h2>
        <form action="{{ route('university_partners.update', $universityPartner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        

            <div class="mb-3">
                <label for="image" class="form-label">Partner University Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            @if ($universityPartner->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/'.$universityPartner->image) }}" alt="Current Image" class="img-thumbnail" width="150">
                </div>
            @endif

          

            <button type="submit" class="btn btn-primary">Update Partner</button>
        </form>
    </div>




@endsection