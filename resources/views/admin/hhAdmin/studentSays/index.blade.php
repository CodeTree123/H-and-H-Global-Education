@extends('admin.layouts.app')

@section('content')
<div class="container ">
    <h1>Student Says</h1>
    <a href="{{ route('students_says.create') }}" class="btn btn-primary">Add New Testimonial</a>

    <br>
    <br>

    <table  id="bannerTable" class="display nowrap table table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentsSays as $studentSay)
                <tr>
                    <td>{{ $studentSay->title }}</td>
                    <td>{{ $studentSay->description }}</td>
                    <td>
                        @if($studentSay->image)
                            <img src="{{ asset('storage/'.$studentSay->image) }}" alt="{{ $studentSay->title }}" style="width: 50px; height: 50px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('students_says.edit', $studentSay) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('students_says.delete', $studentSay->id) }}" method="POST" style="display: inline;">
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
