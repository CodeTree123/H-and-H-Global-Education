@extends('admin.layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4">Branches</h1>
    <a href="{{ route('branches.create') }}" class="btn btn-primary mb-4">Add Branch</a>
    <div class="table-responsive mt-4">
        <table  id="bannerTable" class="display nowrap table table-bordered " style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Branch Name</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Location Map</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($branches as $branch)
                <tr>
                    <td>{{ @$loop->iteration }}</td>
                    <td>{{ @$branch->branch_name }}</td>
                    <td>{{ @$branch->location->name }}</td>
                    <td>{{ @$branch->email }}</td>
                    <td>
                        @if($branch->location_map)
                            <div style="width: 200px; height: 150px; overflow: hidden;">
                                {!! str_replace('<iframe', '<iframe width="200" height="150"', $branch->location_map) !!}
                            </div>
                        @else
                            <span class="text-muted">No map available</span>
                        @endif
                    </td>
                    <td>{{ $branch->phone }}</td>
                    <td>
                        <a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('branches.destroy', $branch->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this branch?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No branches found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
