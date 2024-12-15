@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Add New CEO Greeting</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ceo-greetings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="additional_info">Additional Info</label>
            <textarea name="additional_info" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('ceo-greetings.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
