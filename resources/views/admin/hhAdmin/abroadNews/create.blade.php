@extends('admin.layouts.app')

@section('content')


<div class="container mt-4">
    <h2>Add New Latest Abroad News</h2>

    <form action="{{ route('latest_abroad_news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="news_date">Date</label>
            <input type="date" name="news_date" id="news_date" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@endsection
