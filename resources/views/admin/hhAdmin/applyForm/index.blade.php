@extends('admin.layouts.app')
@section('content')


<div class="container"style="overflow-x: auto;">
    <h1>Global Applications</h1>
    <table  id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Country</th>
            <th>University</th>
            <th>Course</th>
            <th>Mode of Study</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($applications as $application)
        <tr>
            <td>{{ $application->id }}</td>
            <td>{{ $application->first_name }}</td>
            <td>{{ $application->last_name }}</td>
            <td>{{ $application->date_of_birth }}</td>
            <td>{{ $application->gender }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->phone }}</td>
            <td>{{ $application->countryModal->name ?? 'N/A' }}</td>
            <td>{{ $application->universityModal->name ?? 'N/A' }}</td>
            <td>{{ $application->courseModal->name ?? 'N/A' }}</td>
            <td>{{ $application->mode_of_study }}</td>
            <td>
                <a href="{{ route('globalApply.edit', $application->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('globalApply.destroy', $application->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
