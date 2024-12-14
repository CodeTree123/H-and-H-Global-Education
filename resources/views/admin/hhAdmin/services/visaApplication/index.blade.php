@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Visa Applications</h2>
<a href="{{ route('visa-application.create') }}" class="btn btn-primary mb-3">Add New Application</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Page Contents</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ Str::limit($application->pageContent, 100) }}</td>
                    <td>
                        <a href="{{ route('visa-application.edit', $application->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('visa-application.destroy', $application->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
