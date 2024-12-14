@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Latest Abroad News</h2>
    <a href="{{ route('latest_abroad_news.create') }}" class="btn btn-primary mb-3">Add News</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table  id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ $item->image ? asset('storage/' . $item->image) : 'https://via.placeholder.com/150' }}" alt="{{ $item->title }}" width="50">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->news_date->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('latest_abroad_news.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('latest_abroad_news.destroy', $item) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $news->links() }}
</div>
@endsection
