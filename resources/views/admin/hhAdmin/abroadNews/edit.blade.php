@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit Latest Abroad News</h2>
    <form action="{{ route('latest_abroad_news.update', $latestAbroadNews) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $latestAbroadNews->title }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="news_date" class="form-label">Date</label>
            <input type="date" name="news_date" class="form-control" id="news_date" value="{{ $latestAbroadNews->news_date->format('Y-m-d') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
