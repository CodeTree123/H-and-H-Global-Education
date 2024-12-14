@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h1>Universities</h1>
        <a href="{{ route('universities.create') }}" class="btn btn-primary">Add New University</a>
        <br>
        <br>
        <table  id="bannerTable" class="display  table table-bordered mt-4" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Name</th>
                    <th>location</th>
                    <th>Logo</th> <!-- Add this column for the image -->
                    <th>University Banner</th> <!-- Add this column for the image -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($universities as $university)
                    <tr>
                        <td>{{ @$university->id }}</td>
                        <td>{{ @$university->country->name }}</td>
                        <td>{{ @$university->name }}</td>
                        <td>{{ @$university->location }}</td>

                        <td>
                            @if($university->image)
                                <img src="{{ asset('images/' . $university->image) }}" alt="{{ $university->name }} Image" style="width: 100px; height: auto;">
                            @else
                                No Image
                            @endif
                        </td>
                        
                        <td>
                                @if($university->university_banner)
                                    <img src="{{ asset('banners/' . $university->university_banner) }}" alt="University Banner" style="width: 100px; height: auto;">
                                @else
                                    No Image
                                @endif
                            </td>

                        <td>
                            <a href="{{ route('universities.edit', $university->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('universities.destroy', $university->id) }}" method="POST" style="display:inline-block;">
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