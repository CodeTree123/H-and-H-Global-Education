@extends('admin.layouts.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Course Infos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('courses.more.info') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-label">Select Course</div>
                <select class="form-control" name="course_id">
                    @foreach($courses as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Icon for More Info</label>
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description for More Info</label>
                <textarea id="description" name="description" class="form-control" placeholder="Enter Course Descriptions"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New Course</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add More Infos</button>
    <br><br>

<!-- Table with better design -->
<div class="table-responsive">
    <table id="bannerTable" class="display nowrap table table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>University</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ @$course->id }}</td>
                    <td>{{ @$course->name }}</td>
                    <td>{{ @$course->university->name }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <!-- Add the link to view more details -->
                        <a href="{{ route('courses.view', $course->id) }}" class="btn btn-info">View More Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

@endsection

@section('styles')
<style>
    /* Add some padding, alternating row colors, and ensure text wrapping */
    .table th, .table td {
        padding: 10px;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .text-wrap {
        word-wrap: break-word;
        max-height: 100px; /* Limit description height */
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>
@endsection
