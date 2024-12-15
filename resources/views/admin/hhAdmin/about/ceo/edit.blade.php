@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit CEO Greeting</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ceo-greetings.update', $ceoGreeting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ $ceoGreeting->title }}" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $ceoGreeting->email }}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ $ceoGreeting->phone }}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{ $ceoGreeting->address }}" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($ceoGreeting->image)
                <img src="{{ asset('images/' . $ceoGreeting->image) }}" alt="Current Image" width="100" height="100">
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="additional_info">Additional Info</label>
            <textarea name="additional_info" class="form-control">{{ $ceoGreeting->additional_info }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('ceo-greetings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
