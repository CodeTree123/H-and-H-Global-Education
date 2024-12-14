@extends('admin.layouts.app')

@section('content')


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Banner Management</h6>
            <a href="{{ route('banner.create') }}" class="btn btn-primary">Create Banner</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="bannerTable" class="display nowrap table table-bordered mt-4" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Banner Image</th>
                            <th>Banner Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$banner->image) }}" width="100" alt="{{ $banner->title }}">
                                </td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->description }}</td>
                                <td>
                                    <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ route('banner.delete', $banner->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this banner?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
