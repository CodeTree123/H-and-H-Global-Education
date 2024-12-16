@extends('h-and-h.layouts.app')
@section('content')

<div class="container py-5">
    <h2 class="mb-4">Find Universities</h2>

    <div class="row">
        <!-- Filter Section -->
        <div class="col-md-2">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Filter by Country</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ route('university-finder') }}">
                        <div class="form-group">
                            <label>Select Countries:</label>
                            @foreach($countries as $country)
                                <div class="form-check">
                                    <input type="checkbox" name="country_id[]" value="{{ $country->id }}" class="form-check-input" 
                                        {{ in_array($country->id, request('country_id', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label">{{ $country->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-4">Apply Filter</button>
                    </form>
                </div>
            </div>
        </div>

        <style>
            .card-img-top {
                height: 200px; /* Set a fixed height */
                object-fit: cover; /* Ensure the image covers the entire space */
            }
/* Unique styling for buttons container */
.unique-buttons-container {
    justify-content: center; /* Center-align items */
    align-items: center;
}

/* Styling for both buttons */
.unique-btn {
    transition: all 0.3s ease-in-out;
}

/* Book A Free Counselling button hover */
.counselling-btn:hover {
    background-color: white;
    color: white;
    box-shadow: 0px 4px 10px rgba(208, 20, 44, 0.5);
}
.learn-more-btn{
    color:#D0142C;
}

/* Learn More button hover */
.learn-more-btn:hover {
    background-color: #D0142C;
    color: white;
    box-shadow: 0px 4px 10px rgba(208, 20, 44, 0.5);
}

           
        </style>

        <!-- Universities Section -->
        <div class="col-md-10">
            <div class="row">
                @if($universities->count() > 0)
                    @foreach($universities as $university)
                    <div class="col-md-6 mb-4">
    <div class="card h-100">
        <a href="{{ route('university.show',$university->id) }}">
            <img src="{{ asset('images/' . $university->image) }}" class="card-img-top img-fluid w-100" alt="{{ $university->name }}">
        </a>
        <div class="card-body" style="text-align: left;">
            <h2 class="card-title">{{ $university->name }}</h2>
            {!! \Str::limit($university->overview, 300, '…') !!}
            <div class="unique-buttons-container d-flex gap-3 mt-3">
                <a href="{{ route('freecounselling.form') }}" 
                class="unique-btn counselling-btn" 
                style="background-color: #D0142C; color: white; border-radius: 10px; padding: 10px 20px; text-decoration: none; font-weight: bold;">
                    Book A Free Counselling
                </a>
                <a href="{{ route('university.show',$university->slug ?? $university->id) }}" 
                class="unique-btn learn-more-btn" 
                style="border: 2px solid #D0142C; border-radius: 10px; padding: 10px 20px; text-decoration: none; font-weight: bold;">
                    Learn More
                </a>
            </div>
        </div>
    </div> 
</div>

                    @endforeach
                @else
                    <div class="col-12">
                        <p>No universities found for the selected country.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
