@extends('layouts.dashboard-layout')

@section('title', 'Dashboard')

@section('content')




<div class="container mt-5">
    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-3 custom-card">
                <div class="card-header">
                    <h2>Reports</h2>
                </div>
                <div class="card-body">
                    <p>Reports: <span>{{ $reports->count() }}</span></p>
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#viewReports">View User Reports</button>
                    <button type="button" class="btn btn-custom mt-2" data-bs-toggle="modal" data-bs-target="#viewContentReports">View Content Reports</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-3 custom-card">
                <div class="card-header">
                    <h2>Suspend User</h2>
                </div>
                <div class="card-body">
                    <p>Suspended Users: <span>{{ $suspended_users->count() }}</span></p>
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#viewSuspendedUsers">View List</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-3 custom-card">
                <div class="card-header">
                    <h2>Activity Log</h2>
                </div>
                <div class="card-body">
                    <p>New discussions: <span>{{ $discussionsLastWeek->count() }}</span></p>
                    <p>Engagements: <span>{{ $engagementsLastWeek->count() }}</span></p>
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#viewActivities">View Activity Log</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card p-3 custom-card">
                <div class="card-header">
                    <h2>User Points</h2>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#awardPoints">Award Points</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Reports Modal -->
<div class="modal fade" id="viewReports" tabindex="-1" aria-labelledby="viewReportsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewReportsLabel">Reports</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Reported User</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->comment }}</td>
                                <td>{{ $report->report_owner }}</td>
                                <td>{{ $report->user->username }}</td>
                                <td>
                                    <a class="btn btn-danger w-100 mb-2">Delete Report</a>
                                    <a href="{{ route('/suspend-user', ['id' => $report->reported_user, 'report_id' => $report->id]) }}" class="btn btn-warning w-100">Suspend User</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Content Reports Modal -->
<div class="modal fade" id="viewContentReports" tabindex="-1" aria-labelledby="viewContentReportsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewContentReportsLabel">Content Reports</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Comment Owner</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment_reports as $report)
                            <tr>
                                <td>{{ $report->id }}</td>
                                <td>{{ $report->comment }}</td>
                                <td>{{ $report->report_owner }}</td>
                                <td>{{ $report->comment_owner }}</td>
                                <td>
                                    <a class="btn btn-danger w-100 mb-2" id="delete-comment-button" data-comment-id="{{$report->comment_id}}">Delete Comment</a>
                                    <a href="{{ route('/suspend-user', ['id' => $report->comment_owner, 'report_id' => $report->id]) }}" class="btn btn-warning w-100">Suspend User</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Suspended Users Modal -->
<div class="modal fade" id="viewSuspendedUsers" tabindex="-1" aria-labelledby="viewSuspendedUsersLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewSuspendedUsersLabel">Suspended Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suspended_users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>
                                    <a href="{{ route('/remove-suspension', ['id' => $user->id]) }}" class="btn btn-info">Remove Suspension</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- View Activities Modal -->
<div class="modal fade" id="viewActivities" tabindex="-1" aria-labelledby="viewActivitiesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewActivitiesLabel">Activity Log</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Action</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activities as $activity)
                            <tr>
                                <td>{{ $activity->id }}</td>
                                <td>{{ $activity->user->username }}</td>
                                <td>{{ $activity->action }}</td>
                                <td>{{ $activity->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Award Points Modal -->
<div class="modal fade" id="awardPoints" tabindex="-1" aria-labelledby="awardPointsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="awardPointsLabel">Award Points</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('award-points') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="select-user" class="form-label">Select User</label>
                                <select class="form-select" id="select-user" name="user_id">
                                    <option value="" selected disabled>Open this select menu</option>
                                    @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->first_name . " " . $user->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="points" class="form-label">Select Points</label>
                                <select class="form-select" id="points" name="points">
                                    <option value="" selected disabled>Open this select menu</option>
                                    <option value="10">10 Points</option>
                                    <option value="25">25 Points</option>
                                    <option value="50">50 Points</option>
                                    <option value="125">125 Points</option>
                                    <option value="150">150 Points</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Add event listeners for delete buttons
    const deleteButtons = document.querySelectorAll('#delete-comment-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const commentId = this.getAttribute('data-comment-id');;
            deleteComment(commentId);
            window.location.reload();
        });
    });


    function deleteComment(commentId) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: `/delete-comment/${commentId}`,
            type: 'POST',

            success: function(response) {
                // Assuming the server returns the updated list of comments after deletion

                console.log(response);

            },
            error: function(xhr, status, error) {
                console.error(`Error deleting comment: ${error}`);
                // Handle error (e.g., show a message to the user)
            }
        });
    }
</script>

@endsection