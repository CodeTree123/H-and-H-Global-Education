@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
    @foreach ($accommodations as $accommodation)
        <p>{!! $accommodation->pageContent !!}</p>
    @endforeach
    </div>


@endsection