@extends('layouts.dashboard-layout')

@section('title', 'Manage Users')

@section('content')
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="messageBox">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="text-start">
            <input type="text" id="search" placeholder="Search" class="form-control">
        </div>
    </div>
    <div class="table-responsive" style="height: 500px; overflow-y: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- View Button -->
                        <button class="btn btn-secondary view-user" data-user="{{ json_encode(['id' => $user->id, 'username' => $user->username, 'first_name' => $user->first_name, 'last_name' => $user->last_name, 'email' => $user->email, 'interests' => $user->interests, 'cultures' => $user->cultures, 'sub_plan' => $user->subscription->sub_type, 'age' => $user->age, 'gender' => $user->gender, 'privacy' => $user->user_privacy->title, 'role' => $user->user_role->title, 'engagements' => $user->engagements, 'discussions' => $user->discussions]) }}">View</button>

                        <!-- Edit Button -->
                        <a class="btn btn-warning edit-user" data-id="{{ $user->id }}" data-username="{{ $user->username }}" data-first-name="{{ $user->first_name }}" data-categories="{{ json_encode($user->categories->pluck('title')->toArray()) }}" data-last-name="{{ $user->last_name }}" data-email="{{ $user->email }}" data-age="{{ $user->age }}" data-gender="{{ $user->gender }}" data-interests="{{ json_encode($user->interests->pluck('title')->toArray()) }}" data-cultures="{{ json_encode($user->cultures->pluck('title')->toArray()) }}" data-sub="{{ $user->subscription->sub_type }}" data-privacy="{{ $user->user_privacy->title }}" data-role="{{ $user->user_role->title }}" href="#">Edit</a>

                        <!-- Delete Button with Confirmation -->
                        <a class="btn btn-danger delete-user" href="{{ route('users.delete-user', ['id' => $user->id]) }}" data-confirm-message="Are you sure you want to delete {{ $user->username }}?">Delete</a>

                        <!-- Activity Button -->
                        <a class="btn btn-info view-user-activities" data-bs-toggle="modal" data-bs-target="#viewUserActivities" data-user-activities="{{ $user->activities }}" href="#">
                            Activity
                        </a>

                        <!-- Engagement Button -->
                        <a class="btn btn-primary" href="">Engagement</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- User Info Modal -->
<div class="modal fade" id="userInfoModal" tabindex="-1" aria-labelledby="userInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userInfoModalLabel">User Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="user-username" class="form-label">Username:</label>
                            <span id="user-username"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-first-name" class="form-label">First Name:</label>
                            <span id="user-first-name"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-last-name" class="form-label">Last Name:</label>
                            <span id="user-last-name"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-age" class="form-label">Age:</label>
                            <span id="user-age"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-gender" class="form-label">Gender:</label>
                            <span id="user-gender"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-email" class="form-label">Email:</label>
                            <span id="user-email"></span>
                        </div>

                        <div class="mb-3">
                            <label for="user-discussions" class="form-label">Discussions</label>
                            <span id="user-discussions"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="user-interests" class="form-label">Interests:</label>
                            <span id="user-interests"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-cultures" class="form-label">Cultures:</label>
                            <span id="user-cultures"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-sub" class="form-label">Subscription:</label>
                            <span id="user-sub"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-privacy" class="form-label">Privacy:</label>
                            <span id="user-privacy"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-role" class="form-label">Role:</label>
                            <span id="user-role"></span>
                        </div>
                        <div class="mb-3">
                            <label for="user-engagements" class="form-label">Engagements:</label>
                            <span id="user-engagements"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- User Edit Modal -->
<div class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="userEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userEditModalLabel">User Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="edit-user-id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="edit-user-username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="edit-user-username">
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-first-name" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="edit-user-first-name">
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-last-name" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="edit-user-last-name">
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-age" class="form-label">Age:</label>
                            <input type="text" class="form-control" id="edit-user-age">
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-gender" class="form-label">Gender:</label>
                            <select class="form-select" id="edit-user-gender">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="edit-user-email">
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="edit-user-interests" class="form-label">Interests:</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Interests
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="interestsContainer">

                                </ul>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="edit-user-cultures" class="form-label">Cultures:</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Cultures
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="culturesContainer">

                                </ul>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="edit-user-categories" class="form-label">Recommendations:</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Recommendations
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="categoriesContainer">

                                </ul>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="edit-user-sub" class="form-label">Subscription:</label>
                            <select class="form-select" id="edit-user-sub">
                                <option value="" disabled>Select gender</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-privacy" class="form-label">Privacy:</label>
                            <select class="form-select" id="edit-user-privacy">
                                <option value="" disabled>Select gender</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="edit-user-role" class="form-label">Role:</label>
                            <select class="form-select" id="edit-user-role">
                                <option value="" disabled>Select gender</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-start">
                                <p>User Badges</p>
                            </div>
                            <div id="badgeBox">
                                <div class="d-flex">
                                    <span>

                                        <select class="form-select" id="badge">


                                        </select>

                                    </span>
                                    <button class="btn btn-success" id="badgeBtn">Add Badge</button>
                                </div>
                            </div>
                            <div id="badgeBoxEmpty">
                                <div class="d-flex">
                                    <button class="btn-warning btn" disabled>User got all Badges!</button>
                                </div>
                            </div>


                        </div>
                        <div>
                            <div class="table-responsive w-50" style="height: 150px; overflow-y: auto;">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th scope="col">id</th>
                                            <th scope="col">Badge</th>
                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody id="userBadgesContainer">



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="save-changes-btn">Save Changes</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Comment Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">Leave a Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="comment-form">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                    </div>
                    <input type="hidden" id="discussion-id" name="discussion_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- View User Activities Modal -->
<div class="modal fade" id="viewUserActivities" tabindex="-1" aria-labelledby="viewActivitiesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewActivitiesLabel">Activity Log</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Username</th>
                                <th scope="col">Action</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody id="activitiesTableBody">
                            <!-- Activities will be dynamically added here -->

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



@endsection

@section('scripts')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-user');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action (i.e., following the link)

                const confirmMessage = button.getAttribute('data-confirm-message');

                // Display SweetAlert2 confirmation dialog
                Swal.fire({
                    title: 'Are you sure?',
                    text: confirmMessage,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, follow the link
                        window.location.href = button.getAttribute('href');
                    }
                });
            });
        });
    });
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userInfoModal = new bootstrap.Modal(document.getElementById('userInfoModal'), {});

        document.querySelectorAll('.view-user').forEach(button => {
            button.addEventListener('click', function() {
                var user = JSON.parse(this.getAttribute('data-user'));
                console.log(user);
                // document.getElementById('user-id').textContent = user.id;
                document.getElementById('user-username').textContent = user.username;
                document.getElementById('user-first-name').textContent = user.first_name;
                document.getElementById('user-last-name').textContent = user.last_name;
                document.getElementById('user-email').textContent = user.email;
                document.getElementById('user-sub').textContent = user.sub_plan;
                document.getElementById('user-age').textContent = user.age;
                document.getElementById('user-gender').textContent = user.gender;
                document.getElementById('user-privacy').textContent = user.privacy;
                document.getElementById('user-role').textContent = user.role;

                // Handling interests
                var interests = user.interests.map(interest => interest.title).join(', ');
                document.getElementById('user-interests').textContent = interests;

                // Handling cultures
                var cultures = user.cultures.map(culture => culture.title).join(', ');


                document.getElementById('user-cultures').textContent = cultures;



                var engagements = user.engagements.length;


                document.getElementById('user-engagements').textContent = engagements;

                var discussions = user.discussions.length;
                document.getElementById('user-discussions').textContent = discussions;

                userInfoModal.show();
            });
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var userEditModal = new bootstrap.Modal(document.getElementById('userEditModal'), {});
        let badge = document.getElementById('badge');
        let userBadgesContainer = document.getElementById('userBadgesContainer');
        const badgeBtn = document.getElementById('badgeBtn');

        function populateBadges(userId) {
            console.log(userId);

            userBadgesContainer.innerHTML = '';
            badge.innerHTML = `  <option value="" disabled selected> Select Badge</option>`;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-badges') }}",
                data: {
                    user_id: userId
                },

                type: 'POST',
                dataType: 'json',
                success: function(result) {
                    // console.log(result);
                    const userBadges = Object.values(result.userBadges);
                    const missingBadges = Object.values(result.missingBadges);
                    // console.log(userBadges);
                    if (userBadges.length == 0) {
                        userBadgesContainer.innerHTML += `<p class="alert alert-info" >No Badges yet! </p>`;
                    } else {
                        userBadges.forEach((badgeData) => {
                            userBadgesContainer.innerHTML += `
        <tr>
            <td>${badgeData.badge_title}</td>
            <td>
                <button class="btn btn-danger delete-badge-btn" data-badge-id="${badgeData.id}">
                    Delete
                </button>
            </td>
        </tr>`;
                        });
                    }

                    missingBadges.forEach((missingBadge) => {
                        badge.innerHTML += `<option value="${missingBadge.id}">${missingBadge.title} </option>`;
                    })
                    badgeBox = document.getElementById('badgeBox');
                    badgeBoxEmpty = document.getElementById('badgeBoxEmpty');
                    console.log(missingBadges.length);
                    console.log(typeof(missingBadges.length));
                    if (missingBadges.length == 0) {
                        badgeBoxEmpty.style.display = 'block';
                        badgeBox.style.display = 'none';
                    } else {
                        badgeBoxEmpty.style.display = 'none';
                        badgeBox.style.display = 'block';
                    }

                }
            });
        }



        badgeBtn.addEventListener('click', (e) => {
            var test = e.target.parentElement;
            let userId = document.getElementById('edit-user-id').value;


            e.preventDefault();
            let badgeId = badge.value;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('add-badge') }}",
                data: {
                    badge_id: badgeId,
                    user_id: userId,
                },

                type: 'POST',
                dataType: 'json',
                success: function(result) {

                    console.log("===== " + JSON.stringify(result) + " =====");

                    populateBadges(userId);
                }
            });

        });
        // Edit user button click handler
        document.querySelectorAll('.edit-user').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                var id = this.getAttribute('data-id');
                var username = this.getAttribute('data-username');
                var firstName = this.getAttribute('data-first-name');
                var lastName = this.getAttribute('data-last-name');
                var email = this.getAttribute('data-email');
                var age = this.getAttribute('data-age');
                var user_gender = this.getAttribute('data-gender');
                var user_interests = JSON.parse(this.getAttribute('data-interests'));
                var user_cultures = JSON.parse(this.getAttribute('data-cultures'));
                var user_sub = this.getAttribute('data-sub');
                var user_privacy = this.getAttribute('data-privacy');
                var user_role = this.getAttribute('data-role');
                var user_categories = this.getAttribute('data-categories');

                populateBadges(id);
                userBadgesContainer.addEventListener('click', function(e) {
                    if (e.target.classList.contains('delete-badge-btn')) {
                        e.preventDefault();
                        let badgeId = e.target.getAttribute('data-badge-id');

                        // AJAX call to delete badge
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: `/delete-badge/${badgeId}`, // Adjust the URL as per your application's route
                            type: 'DELETE',
                            dataType: 'json',
                            success: function(result) {
                                console.log("Badge deleted successfully");
                                // Optionally update UI or reload badges list
                                e.target.closest('tr').remove(); // Remove the badge row from UI
                                populateBadges(id);
                            },
                            error: function(xhr, status, error) {
                                console.error('Error deleting badge:', error);
                                // Handle error appropriately
                            }
                        });
                    }
                });
                // Populate modal inputs with user data
                document.getElementById('edit-user-id').value = id;
                document.getElementById('edit-user-username').value = username;
                document.getElementById('edit-user-first-name').value = firstName;
                document.getElementById('edit-user-last-name').value = lastName;
                document.getElementById('edit-user-email').value = email;
                document.getElementById('edit-user-age').value = age;




                var allInterests = '<?php echo $interests; ?>';
                allInterests = JSON.parse(allInterests);


                var interestsContainer = document.getElementById('interestsContainer');
                interestsContainer.innerHTML = '';
                allInterests.forEach(interest => {
                    interestTitle = interest['title'];
                    interestId = interest['id'];
                    interestsContainer.innerHTML += `
    <li>
        <input type="checkbox" class="form-check-input interest-checkbox" id="interest-${interestTitle}" name="interests[]" value="${interestId}" ${user_interests.includes(interestTitle) ? 'checked' : ''}>
        <label class="form-check-label" for="interest-${interestTitle}">${interestTitle}</label>
    </li>
`;


                });

                var allCultures = '<?php echo $cultures; ?>';
                allCultures = JSON.parse(allCultures);

                var culturesContainer = document.getElementById('culturesContainer');
                culturesContainer.innerHTML = '';
                allCultures.forEach(cultre => {
                    cultureTitle = cultre['title'];
                    cultureId = cultre['id'];
                    culturesContainer.innerHTML += `
    <li>
        <input type="checkbox" class="form-check-input culture-checkbox" id="culture-${cultureTitle}" name="cultures[]" value="${cultureId}" ${user_cultures.includes(cultureTitle) ? 'checked' : ''}>
        <label class="form-check-label" for="culture-${cultureTitle}">${cultureTitle}</label>
    </li>
`;


                });


                // Populate cultures select
                var genders = ['Male', 'Female', 'Other'];
                var gendersContainer = document.getElementById('edit-user-gender');
                gendersContainer.innerHTML = '';
                genders.forEach(gender => {
                    // console.log(gender); // This will log each gender during the loop

                    var option = document.createElement('option');
                    if (gender.toLowerCase() == user_gender.toLowerCase()) {
                        option.selected = true; // Use the property directly
                    }
                    option.value = gender;
                    option.textContent = gender;
                    gendersContainer.appendChild(option);
                });




                var allSubscriptions = '<?php echo $subscriptions; ?>';
                allSubscriptions = JSON.parse(allSubscriptions);

                var subscriptionsContainer = document.getElementById('edit-user-sub');
                subscriptionsContainer.innerHTML = '';

                allSubscriptions.forEach(subscription_type => {

                    var option = document.createElement('option');
                    if (subscription_type.sub_type.toLowerCase() == user_sub.toLowerCase()) {
                        option.selected = true; // Use the property directly
                    }
                    option.value = subscription_type.id;
                    option.textContent = subscription_type.sub_type;
                    subscriptionsContainer.appendChild(option);
                });


                var allPrivacyOptions = '<?php echo $privacy_options; ?>';
                allPrivacyOptions = JSON.parse(allPrivacyOptions);


                var privacyContainer = document.getElementById('edit-user-privacy');
                privacyContainer.innerHTML = '';

                allPrivacyOptions.forEach(privacy_option => {

                    var option = document.createElement('option');
                    if (privacy_option.title.toLowerCase() == user_privacy.toLowerCase()) {
                        option.selected = true; // Use the property directly
                    }
                    option.value = privacy_option.id;
                    option.textContent = privacy_option.title;
                    privacyContainer.appendChild(option);
                });


                var allRoleOptions = '<?php echo $role_options; ?>';
                allRoleOptions = JSON.parse(allRoleOptions);



                var roleContainer = document.getElementById('edit-user-role');
                roleContainer.innerHTML = '';

                allRoleOptions.forEach(role_option => {

                    var option = document.createElement('option');

                    if (role_option.title.toLowerCase() == user_role.toLowerCase()) {
                        option.selected = true; // Use the property directly
                    }
                    option.value = role_option.id;
                    option.textContent = role_option.title;
                    roleContainer.appendChild(option);

                });

                if (user_role.toLowerCase() == 'admin') {
                    var option = document.createElement('option');
                    option.value = 1;
                    option.textContent = 'Admin';
                    option.selected = true;
                    roleContainer.appendChild(option);
                }


                var allCategories = '<?php echo $categories; ?>';
                allCategories = JSON.parse(allCategories);


                var categoriesContainer = document.getElementById('categoriesContainer');
                categoriesContainer.innerHTML = '';
                allCategories.forEach(category => {
                    categoryTitle = category['title'];
                    categoryId = category['id'];
                    categoriesContainer.innerHTML += `
    <li>
        <input type="checkbox" class="form-check-input category-checkbox" id="culture-${categoryTitle}" name="categories[]" value="${categoryId}" ${user_categories.includes(categoryTitle) ? 'checked' : ''}>
        <label class="form-check-label" for="category-${categoryTitle}">${categoryTitle}</label>
    </li>
`;


                });

                // Show the modal
                userEditModal.show();
            });
        });

        // Save changes button click handler
        document.getElementById('save-changes-btn').addEventListener('click', function() {
            var userId = document.getElementById('edit-user-id').value;
            var username = document.getElementById('edit-user-username').value;
            var firstName = document.getElementById('edit-user-first-name').value;
            var lastName = document.getElementById('edit-user-last-name').value;
            var email = document.getElementById('edit-user-email').value;
            var age = document.getElementById('edit-user-age').value;
            var gender = document.getElementById('edit-user-gender').value;
            var sub = document.getElementById('edit-user-sub').value;
            var privacy = document.getElementById('edit-user-privacy').value;
            var role = document.getElementById('edit-user-role').value;
            var interests = Array.from(document.querySelectorAll('.interest-checkbox:checked'))
                .map(checkbox => checkbox.value);

            var cultures = Array.from(document.querySelectorAll('.culture-checkbox:checked'))
                .map(checkbox => checkbox.value);
            var categories = Array.from(document.querySelectorAll('.category-checkbox:checked'))
                .map(checkbox => checkbox.value);


            // Prepare data to send via AJAX
            var formData = {
                id: userId,
                username: username,
                first_name: firstName,
                last_name: lastName,
                email: email,
                age: age,
                gender: gender,
                sub_plan: sub,
                privacy: privacy,
                role: role,
                interests: interests,
                cultures: cultures,
                categories: categories
            };

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('users.update-user') }}",
                data: formData,

                type: 'POST',
                dataType: 'json',
                success: function(result) {
                    console.log("===== " + JSON.stringify(result) + " =====");
                    messageBox = document.getElementById('messageBox');


                    userEditModal.hide();
                    Swal.fire({
                        icon: 'success',
                        title: 'User Updated',
                        text: 'The user has been successfully updated!',
                        confirmButtonText: 'OK'
                    });

                }
            });



        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const viewActivitiesModal = document.getElementById('viewUserActivities');
        const activitiesModalBody = viewActivitiesModal.querySelector('.modal-body');
        let activitiesTableBody = document.getElementById('activitiesTableBody');



        const viewUserActivitiesButtons = document.querySelectorAll('.view-user-activities');
        viewUserActivitiesButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                let userActivities = this.getAttribute('data-user-activities');
                userActivities = JSON.parse(userActivities);
                console.log(typeof(userActivities));
                let activitiesTableBody = document.getElementById('activitiesTableBody');
                activitiesTableBody.innerHTML = '';
                userActivities.forEach((activity) => {

                    activitiesTableBody.innerHTML +=
                        `     
                            <tr>
                                <td>${activity.id}</td>
                                <td>${activity.user_id}</td>
                                <td>${activity.action}</td>
                                <td>${activity.created_at}</td>
                        
                            </tr>`

                })


            });
        });
    });
</script>

@endsection