@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <a href="{{ route('ceo-greetings.create') }}" class="btn btn-primary">Create New</a>

    <table class="table table-bordered mt-4">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        @foreach ($ceoGreetings as $ceoGreeting)
            <tr>
                <td>{{ $ceoGreeting->id }}</td>
                <td>{{ $ceoGreeting->title }}</td>
                <td>
                    @if($ceoGreeting->image)
                        <img src="{{ asset('images/' . $ceoGreeting->image) }}" width="50" height="50" alt="Image">
                    @endif
                </td>
                <td>
                    <a href="{{ route('ceo-greetings.edit', $ceoGreeting->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('ceo-greetings.destroy', $ceoGreeting->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
