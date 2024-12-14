@extends('admin.layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('university-admissions.create') }}" class="btn btn-primary">Add New Admission</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>According Title</th>
                <th>According Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admissions as $admission)
            <tr>
                <td>{{ $admission->id }}</td>
                <td>{{ $admission->accordingTitle }}</td>
                <td>{{ $admission->accordingcontent }}</td>
                <td>
                    <a href="{{ route('university-admissions.edit', $admission->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('university-admissions.destroy', $admission->id) }}" method="POST" style="display:inline;">
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
