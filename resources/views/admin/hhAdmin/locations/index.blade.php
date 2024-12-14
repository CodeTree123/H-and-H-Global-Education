@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1>Locations</h1>
    <a href="{{ route('locations.create') }}" class="btn btn-primary mb-3">Add Location</a>
    <table  id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Location Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locations as $location)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $location->name }}</td>
                <td>
                    <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

