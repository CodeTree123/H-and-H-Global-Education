@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Accommodation List</h2>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add New Button -->
    <div class="mb-3">
        <a href="{{ route('accommodation.create') }}" class="btn btn-success">Add New Accommodation</a>
    </div>

    <!-- Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Page Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($accommodations as $accommodation)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit(strip_tags($accommodation->pageContent), 50) }}</td>
                    <td>
                        <a href="{{ route('accommodation.edit', $accommodation->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('accommodation.destroy', $accommodation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No accommodations found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
