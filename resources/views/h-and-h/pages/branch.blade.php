@extends('h-and-h.layouts.app')
@section('content')

<style>
    /* General Styles */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
    }

    .branch-section {
        width: 100%;
        background-color: #ffffff;
        padding: 50px 0;
    }

    .branch-container {
        max-width: 1200px;
        margin: 0 auto;
        /* text-align: center; */
    }

    .office-card {
        background-color: #ffffff;
        border: 1px solid #ddd;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .office-card h3 {
        color: #ff5722;
        font-size: 24px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .office-card p {
        font-size: 16px;
        color: #333;
        margin: 8px 0;
        line-height: 1.6;
    }

    .map-container {
        position: relative;
        padding-top: 56.25%;
        border-radius: 12px;
        overflow: hidden;
        margin-top: 20px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 12px;
    }

    .no-map {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8d7da;
        border: 2px dashed #ff5722;
        height: 200px;
        border-radius: 12px;
        color: #ff5722;
        font-weight: 700;
        font-size: 16px;
    }
    .page-banner {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 450px;
}

</style>

<br>
<br>
<br>







<div class="page-banner ovbl-dark" style="position: relative; height:450px; text-align: center;">
    <div style="background-image: url('{{ asset('h-and-h/assets/images/banner/banner2.jpg') }}'); filter: blur(3px); position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-size: cover; background-position: center; z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <div class="page-banner-entry">
            <h1 class="text-white">{{ $branch->branch_name }}</h1>
        </div>
    </div>
</div>


<div class="branch-section">
    <div class="branch-container">
        <div class="office-card">
            <h3 class="branch-title">{{ $branch->branch_name }}</h3>
            <div class="branch-info">
                <p><strong>📍 Address:</strong> {{ $branch->address }}</p>
                <p><strong>📞 Phone:</strong> <a href="tel:{{ $branch->phone }}">{{ $branch->phone }}</a></p>
                <p><strong>✉️ Email:</strong> <a href="mailto:{{ $branch->email }}">{{ $branch->email }}</a></p>
                @if ($branch->facebook_page)
                    <p><strong>🌐 Facebook:</strong> <a href="{{ $branch->facebook_page }}" target="_blank">Visit Page</a></p>
                @endif
            </div>
            @if($branch->location_map)
                <div class="map-container">
                    {!! str_replace('<iframe', '<iframe style="border-radius: 12px;"', $branch->location_map) !!}
                </div>
            @else
                <div class="no-map">
                    <p>No map available</p>
                </div>
            @endif
        </div>
    </div>
</div>


@endsection
