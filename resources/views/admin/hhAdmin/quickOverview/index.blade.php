@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Quick Overview List</h1>
    <a href="{{ route('quick_overview.create') }}" class="btn btn-primary mb-3">Add New</a>

    <table  id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quickOverviews as $overview)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $overview->title }}</td>
                    <td>{{ $overview->description }}</td>
                    <td>
                    @if ($overview->image)
                    <img src="{{ asset('storage/' . $overview->image) }}" width="100"  alt="{{ $overview->title }}">
                    @else
                        No Image
                    @endif
                    </td>
                    <td>
                        <a href="{{ route('quick_overview.edit', $overview->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('quick_overview.delete', $overview->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
