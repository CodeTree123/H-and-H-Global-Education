@extends('admin.layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('student-counselling.create') }}" class="btn btn-primary">Add New Counselling</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page Contents</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($counsellings as $counselling)
            <tr>
                <td>{{ $counselling->id }}</td>
                <td>{{ \Str::limit($counselling->pageContent, 50) }}</td>
                <td>
                    <a href="{{ route('student-counselling.edit', $counselling->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('student-counselling.destroy', $counselling->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
