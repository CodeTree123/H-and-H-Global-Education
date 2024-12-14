@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Study Levels</h1>
        <a href="{{ route('study-levels.create') }}" class="btn btn-primary">Add New Study Level</a>
        
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
                @foreach($studyLevels as $studyLevel)
                    <tr>
                        <td>{{ $studyLevel->id }}</td>
                        <td>{{ $studyLevel->name }}</td>
                        <td>
                            <a href="{{ route('study-levels.edit', $studyLevel->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('study-levels.destroy', $studyLevel->id) }}" method="POST" style="display:inline-block;">
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
