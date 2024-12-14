@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Course Types</h1>
        <a href="{{ route('course-types.create') }}" class="btn btn-primary">Add New Course Type</a>
       <br>
       <br>
        <table  id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courseTypes as $courseType)
                    <tr>
                        <td>{{ $courseType->id }}</td>
                        <td>{{ $courseType->name }}</td>
                        <td>
                            <a href="{{ route('course-types.edit', $courseType->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('course-types.destroy', $courseType->id) }}" method="POST" style="display:inline-block;">
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
