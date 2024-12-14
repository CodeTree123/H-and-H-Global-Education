@extends('admin.layouts.app')
@section('content')

    <div class="container">
        <h2>University Partners</h2>
        <a href="{{ route('university_partners.create') }}" class="btn btn-primary mb-3">Add New Partner</a>

        <div class="row">
            @foreach ($universityPartners as $partner)
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <img src="{{ $partner->image ? asset('storage/'.$partner->image) : 'https://via.placeholder.com/150' }}" 
     class="card-img-top" 
     alt="Partner Image" 
     style="width:100%; height: 150px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Partner ID: {{ $partner->id }}</h5>
                            <a href="{{ route('university_partners.edit', $partner->id) }}" class="btn btn-warning">Edit</a>
                            
                            <!-- Delete Button -->
                            <form action="{{ route('university_partners.destroy', $partner->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this partner?');">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
