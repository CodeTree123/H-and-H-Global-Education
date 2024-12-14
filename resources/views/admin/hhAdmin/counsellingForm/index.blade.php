@extends('admin.layouts.app')
@section('content')


    <!-- Wrapping the table in a scrollable container -->
  <div class="container">
  <h1>Free Counseling Sessions</h1>
  <div style="overflow-y: auto; max-height: 600px; margin-top: 20px;">
        <table id="bannerTable" class="display nowrap table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Education Level</th>
                    <th>Grade</th>
                    <th>Institute Name</th>
                    <th>Graduation Year</th>
                    <th>Language</th>
                    <th>Destination</th>
                    <th>Current Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($counsellings as $key => $counselling)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $counselling->name }}</td>
                        <td>{{ $counselling->email }}</td>
                        <td>{{ $counselling->contact }}</td>
                        <td>{{ $counselling->education }}</td>
                        <td>{{ $counselling->grade }}</td>
                        <td>{{ $counselling->institute_name }}</td>
                        <td>{{ $counselling->graduation_year }}</td>
                        <td>{{ $counselling->language }}</td>
                        <td>{{ $counselling->destination }}</td>
                        <td>{{ $counselling->current_location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@endsection
