@extends('admin.layouts.app')

@section('content')
    <div class="container" >
        <h1>Countries</h1>
        <a href="{{ route('countries.create') }}" class="btn btn-primary">Add New Country</a>
        <br>
        <br>

        <div style="overflow-x:auto">
        <table  id="bannerTable" class="display  table table-bordered mt-4" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Icon</th>
                    <th>Flag</th>
                    <th>Background Banner</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <!-- Correct image paths -->
                        <td>
                            @if($country->icon)
                                <img src="{{ asset('storage/' . $country->icon) }}" alt="Icon" width="50">
                            @else
                                <p>No Icon Available</p>
                            @endif
                        </td>

                        <td>
                            @if($country->thumbnail)
                                <img src="{{ asset('storage/' . $country->thumbnail) }}" alt="Thumbnail" width="50">
                            @else
                                <p>No Thumbnail Available</p>
                            @endif
                        </td>

                        <td>
                            @if($country->banner)
                                <img src="{{ asset('storage/' . $country->banner) }}" alt="Banner" width="50">
                            @else
                                <p>No Banner Available</p>
                            @endif
                        </td>

                        <td>{{ $country->description }}</td>
                        <td>
                            <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('countries.destroy', $country->id) }}" method="POST" style="display:inline-block;">
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
        
    </div>
@endsection
