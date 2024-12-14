@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
    @foreach ($visaApplications as $application)
        <p>{!! $application->pageContent !!}</p>
    @endforeach
    </div>


@endsection