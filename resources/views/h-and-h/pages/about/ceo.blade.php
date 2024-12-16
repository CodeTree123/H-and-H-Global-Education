@extends('h-and-h.layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
    .profile-section {
        margin: 50px auto;
        max-width: 900px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .profile-section:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
    .profile-image {
        max-width: 120px;
        border-radius: 50%;
        margin: 15px auto;
    }
    .profile-content {
        padding: 20px;
    }
    .bg-light {
        background-color: #f8f9fa;
    }
    .bg-dark {
        background-color: #343a40;
        color: white;
    }
    .profile-section:nth-child(odd) .profile-content {
        text-align: left;
    }
    .profile-section:nth-child(even) .profile-content {
        text-align: right;
    }
</style>
<div class="container">
    @foreach ($greetingss as $index => $greeting)
        <div class="profile-section {{ $index % 2 == 0 ? 'bg-light' : 'bg-dark' }}">
            <!-- Profile Image -->
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <img src="{{asset('images')}}/{{$greeting->image}}" 
                     alt="Profile Image" class="profile-image">
            </div>
            <!-- Profile Details -->
            <div class="col-md-8 profile-content">
                <h4 class="mb-2">{{ $greeting->title }}</h4>
                <p>Email: {{ $greeting->email }}</p>
                <p>Phone: {{ $greeting->phone }}</p>
                <p>Address: {{ $greeting->address }}</p>
                <hr>
                <h5>About Me</h5>
                <p>{{ $greeting->additional_info }}</p>
            </div>
        </div>
    @endforeach
</div>

@endsection
