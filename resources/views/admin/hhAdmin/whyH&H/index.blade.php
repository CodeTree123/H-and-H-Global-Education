@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Why H&H Global Education</h1>

        <!-- Success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button to create a new record -->
        <a href="{{ route('whyH&H.create') }}" class="btn btn-primary mb-3">Add New</a>

        <table  id="bannerTable" class="display  table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($whyHHs as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->description, 100) }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100px;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('whyH&H.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            <!-- Delete button -->
                            <form action="{{ route('whyH&H.delete', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
