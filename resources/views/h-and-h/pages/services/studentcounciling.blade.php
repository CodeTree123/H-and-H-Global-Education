@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
    @foreach ($StudentCounselling as $counselling)
        <p>{!! $counselling->pageContent !!}</p>
    @endforeach
    </div>

@endsection