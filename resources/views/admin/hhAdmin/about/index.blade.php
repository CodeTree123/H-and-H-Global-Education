@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Button Section -->
    <div class="row mb-4">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalMission">
                Create Mission
            </button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalTeam">
                Create Team
            </button>
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modalAchievement">
                Create Achievement
            </button>
        </div>
    </div>

    <!-- Mission Table -->
    <div class="card">
        <div class="card-header bg-primary text-white">Mission List</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($missionss as $mission)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mission->title }}</td>
                            <td>{{ $mission->description }}</td>
                            <td>{{ $mission->created_at->format('d M Y') }}</td>
                            <td>
                                <button class="btn btn-sm btn-info">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mission Modal -->
    <div class="modal fade" id="modalMission" tabindex="-1" role="dialog" aria-labelledby="modalMissionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalMissionLabel">Create Mission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="missionForm" action="{{ route('missions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="missionTitle">Mission Title</label>
                            <input type="text" class="form-control" id="missionTitle" name="title" placeholder="Enter mission title" required>
                        </div>
                        <div class="form-group">
                            <label for="missionDescription">Mission Description</label>
                            <textarea class="form-control" id="missionDescription" name="description" rows="3" placeholder="Enter mission description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Mission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Modal -->
    <div class="modal fade" id="modalTeam" tabindex="-1" role="dialog" aria-labelledby="modalTeamLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTeamLabel">Create Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="teamName">Team Name</label>
                            <input type="text" class="form-control" id="teamName" placeholder="Enter team name" required>
                        </div>
                        <div class="form-group">
                            <label for="teamDescription">Team Description</label>
                            <textarea class="form-control" id="teamDescription" rows="3" placeholder="Enter team description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Save Team</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievement Modal -->
    <div class="modal fade" id="modalAchievement" tabindex="-1" role="dialog" aria-labelledby="modalAchievementLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAchievementLabel">Create Achievement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="achievementTitle">Achievement Title</label>
                            <input type="text" class="form-control" id="achievementTitle" placeholder="Enter achievement title" required>
                        </div>
                        <div class="form-group">
                            <label for="achievementDescription">Achievement Description</label>
                            <textarea class="form-control" id="achievementDescription" rows="3" placeholder="Enter achievement description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Save Achievement</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Popper.js and Bootstrap Bundle) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
