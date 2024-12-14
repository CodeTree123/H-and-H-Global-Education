@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Greetings List</h1>
    <a href="{{ route('greetings.create') }}" class="btn btn-primary mb-3">Create New Greeting</a>
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
            @foreach ($greetings as $greeting)
                <tr>
                    <td>{{ $greeting->id }}</td>
                    <td>{{ $greeting->title }}</td>
                    <td>{{ Str::limit($greeting->description, 50) }}</td>
                    <td>
                        @if($greeting->image)
                            <img src="{{ asset('storage/' . $greeting->image) }}" alt="Greeting Image" style="width: 100px;">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('greetings.edit', $greeting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('greetings.delete', $greeting->id) }}" method="POST" style="display:inline-block;">
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
