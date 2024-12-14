@extends('h-and-h.layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<br>
    <div class="container">
    @foreach ($airportPickups as $pickup)
        <p>{!! $pickup->pageContent !!}</p>
    @endforeach
    </div>

@endsection