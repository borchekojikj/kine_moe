@extends('layouts.dashboard-layout')

@section('title', 'User Profile')

@section('content')



<div class="container">

    <div class="form-container">
        <div class="alert alert-success alert-dismissible fade show" style="display: none;" id="message">

        </div>
        <form id="update-user-form" data-action="{{ route('/update-user', ['id' => $user->id]) }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="edit-user-username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="edit-user-username" value="{{ $user->username }}" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-first-name" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="edit-user-first-name" value="{{ $user->first_name }}" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-last-name" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="edit-user-last-name" value="{{ $user->last_name }}" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-age" class="form-label">Age:</label>
                        <input type="text" class="form-control" id="edit-user-age" value="{{ $user->age }}" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-gender" class="form-label">Gender:</label>
                        <select class="form-select" id="edit-user-gender" name="gender">
                            <!-- Options for gender can be dynamically populated here -->
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="edit-user-email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="edit-user-email" value="{{ $user->email }}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-interests" class="form-label">Interests:</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Select Interests
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="interestsContainer">
                                <!-- Options for interests can be dynamically populated here -->
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
                                <!-- Options for cultures can be dynamically populated here -->
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
                                <!-- Options for recommendations can be dynamically populated here -->
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="edit-user-privacy" class="form-label">Privacy:</label>
                        <select class="form-select" id="edit-user-privacy" name="privacy">
                            <!-- Options for privacy settings can be dynamically populated here -->
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
</div>


<script>
    var user_interests = `<?php echo $user->interests; ?>`
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

    var user_cultures = '<?php echo $user->cultures; ?>';
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


    //     // Populate cultures select
    var genders = ['Male', 'Female', 'Other'];
    var gendersContainer = document.getElementById('edit-user-gender');
    var user_gender = '<?php echo $user->gender ?>';
    gendersContainer.innerHTML = '';
    genders.forEach(gender => {


        var option = document.createElement('option');
        if (gender.toLowerCase() == user_gender.toLowerCase()) {
            option.selected = true; // Use the property directly
        }
        option.value = gender;
        option.textContent = gender;
        gendersContainer.appendChild(option);
    });





    var user_privacy = '<?php echo $user->user_privacy->title; ?>';
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






    var user_categories = '<?php echo $user->categories; ?>';
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


    document.getElementById('update-user-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = new FormData(this); // 'this' refers to the form element

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(this).data('action'), // Use data-action attribute for URL
            type: 'POST',
            data: formData,
            processData: false, // Prevent jQuery from automatically processing data
            contentType: false, // Prevent jQuery from setting contentType
            dataType: 'json',
            success: function(result) {
                console.log("Update successful:", result);
                let messageContainer = document.getElementById('message');
                messageContainer.innerHTML = result.message;
                messageContainer.style.display = 'block';
                setTimeout(function() {
                    messageContainer.style.display = 'none'; // Hide the message container after delay
                }, 2000);

            },
            error: function(xhr, status, error) {
                console.error("Update failed:", error);
                // Handle error, e.g., display an error message
            }
        });



    });
</script>
@endsection