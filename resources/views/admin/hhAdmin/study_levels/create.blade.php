@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add Study Level</h1>
        <form action="{{ route('study-levels.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
