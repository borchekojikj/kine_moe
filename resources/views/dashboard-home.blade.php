@extends('layouts.dashboard-layout')

@section('title', 'Page View')

@section('content')


<?php

use Illuminate\Support\Facades\Auth;



?>




<div class="container">
    <div class="row mb-5">
        <div class="col-4">
            <a href="#" class="btn btn-dark w-100" id="home-button">Home</a>
        </div>
        <div class="col-4">
            <a href="#" class="btn btn-dark w-100" id="discussions-button">Discussions</a>
        </div>
        <div class="col-4">
            <a href="#" class="btn btn-dark w-100" id="community-button">Community</a>
        </div>

    </div>


    <div id="home-container">

        <div class="banner">

            <div class="title">
                <h1> {{ $data->title }}</h1>
                <p class="slogan">{{ $data->slogan }}</p>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    @foreach($contents as $content)



                    <div class="col-4 text-center">
                        <div class="card mb-4">
                            <div class="card-header">{{ $content->title }}</div>
                            <div class="card-body">

                                <div>
                                    <p>{{ $content->get_content_type->title }}</p>
                                    <img src="{{$content->photo_url}}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>



            </div>
        </div>
    </div>

    <div id="discussions-container" style="display: none;">
        <h1>Discussions</h1>
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#discussionModal">
            Create
        </button>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">

                    @foreach($discussions as $discussion)

                    <div class="col-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <strong>Title:</strong> {{ $discussion->title }}
                                    </div>
                                    <div class="text-end">
                                        <strong>Owner:</strong> {{ $discussion->user->username }}
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-10">

                                        Description: {{ $discussion->description }}
                                    </div>
                                    <div class="col-2 text-end">
                                        <p><strong>{{ $discussion->content->get_content_type->title }}:</strong> {{ $discussion->content->title }}</p>
                                    </div>
                                </div>
                                <div>

                                </div>

                            </div>
                            <div class="row justify-content-between align-items-center p-3">
                                <span class="col-3">
                                    <a href="#" class="text-decoration-none text-dark discussion-link btn btn-warning" data-discussion-id="{{ $discussion->id }}" data-title="{{ $discussion->title }}" data-description="{{ $discussion->description }}" data-content-id="{{ $discussion->content->id }}" data-comments="{{ $discussion->comments }}">View</a>
                                </span>

                                <span class="col-3 text-end text-decoration-none">
                                    {{ $discussion->engagements->where('user_reaction', true)->count() }}
                                    @if(in_array(Auth::user()->id ,$discussion->engagements->where('user_reaction', true)->pluck('user_id')->toArray()) )
                                    <a href="{{ route('remove-reaction-discussion', ['id'=>$discussion->id]) }}" class="me-3  btn-outline-primary text-decoration-none">Liked</a>
                                    {{ $discussion->engagements->where('user_reaction', false)->count() }}
                                    <a href="#" class="btn-outline-secondary text-decoration-none disabled-link" aria-disabled="true" tabindex="-1">Dislike</a>
                                    @elseif(in_array(Auth::user()->id ,$discussion->engagements->where('user_reaction', false)->pluck('user_id')->toArray()) )
                                    <a href="#" class="btn-outline-secondary text-decoration-none disabled-link" aria-disabled="true" tabindex="-1">Like</a>
                                    {{ $discussion->engagements->where('user_reaction', false)->count() }}
                                    <a href="{{ route('remove-reaction-discussion', ['id'=>$discussion->id]) }}" class="me-3  btn-outline-primary text-decoration-none">Disliked</a>
                                    @else
                                    <a href="{{ route('like-discussion', ['id'=>$discussion->id]) }}" class="me-3  btn-outline-primary text-decoration-none">Like</a>
                                    {{ $discussion->engagements->where('user_reaction', false)->count() }}
                                    <a href="{{ route('dislike-discussion', ['id'=>$discussion->id]) }}" class=" btn-outline-secondary text-decoration-none">Dislike</a>

                                    @endif


                                </span>

                            </div>
                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div id="community-container" style="display: none;">
        <h1>Community</h1>

    </div>
</div>
<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

<!-- Create Discussion Modal -->
<div class="modal fade" id="discussionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Discussion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="create-discussion-form">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="content_id" class="form-label">Choose content</label>
                                <select class="form-select" id="content_id" name="content_id">
                                    <option value="" disabled selected>Select content</option>
                                    @foreach($contents as $content)
                                    <option value="{{ $content->id }}">{{ $content->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">

                                <label for="description">Description</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Comment Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel">Discussion Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="discussionTitle"></h5>
                <p id="discussionDescription"></p>
                <hr>
                <h5>Comments</h5>
                <div id="commentsContainer"></div>
                <hr>
                <form id="comment-form">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Leave a Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                    </div>
                    <input type="hidden" id="discussion-id" name="discussion_id">
                    <input type="hidden" id="content-id" name="content_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    homeButton = document.getElementById('home-button');
    discussionsButton = document.getElementById('discussions-button');
    communityButton = document.getElementById('community-button');


    homeContainer = document.getElementById('home-container');
    discussionsContainer = document.getElementById('discussions-container');
    communityContainer = document.getElementById('community-container');

    homeButton.addEventListener('click', function(event) {
        homeContainer.style.display = 'block';
        discussionsContainer.style.display = 'none';
        communityContainer.style.display = 'none';

    })
    discussionsButton.addEventListener('click', function(event) {
        homeContainer.style.display = 'none';
        discussionsContainer.style.display = 'block';
        communityContainer.style.display = 'none';


    })
    communityButton.addEventListener('click', function(event) {
        homeContainer.style.display = 'none';
        discussionsContainer.style.display = 'none';
        communityContainer.style.display = 'block';

    })


    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {

        // Select the form element
        const createDiscussionForm = document.getElementById('create-discussion-form');

        // Add submit event listener to the form
        createDiscussionForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Serialize form data
            const formData = new FormData(createDiscussionForm);

            // Convert FormData to plain object
            const plainFormData = {};
            for (const [key, value] of formData.entries()) {
                plainFormData[key] = value;
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('store-discussion') }}",
                data: plainFormData,

                type: 'POST',
                dataType: 'json',
                success: function(result) {
                    console.log("===== " + JSON.stringify(result) + " =====");

                    $('#discussionModal').modal('hide');
                    createDiscussionForm.reset();
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const authUserId = '<?php echo Auth::user()->id; ?>';
        const discussionLinks = document.querySelectorAll('.discussion-link');
        const commentModal = new bootstrap.Modal(document.getElementById('commentModal'));
        const discussionIdInput = document.getElementById('discussion-id');
        const contentIdInput = document.getElementById('content-id');
        const commentForm = document.getElementById('comment-form');
        const commentsContainer = document.getElementById('commentsContainer');
        const discussionTitle = document.getElementById('discussionTitle');
        const discussionDescription = document.getElementById('discussionDescription');

        discussionLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();





                // Clear previous comments and discussion details

                discussionTitle.innerHTML = '';
                discussionDescription.innerHTML = '';

                const discussionId = this.dataset.discussionId;
                const contentId = this.dataset.contentId;
                const discussionComments = JSON.parse(this.dataset.comments);
                const discussionDescriptionData = this.dataset.description;
                const discussionTitleData = this.dataset.title;
                console.log(discussionTitleData)


                const discussionTitleText = discussionTitleData ? `Title: ${discussionTitleData}` : 'No title available';
                discussionDescription.innerHTML = discussionDescriptionData ? discussionDescriptionData : 'No description available';

                discussionIdInput.value = discussionId;
                contentIdInput.value = contentId;

                discussionTitle.innerText = discussionTitleText;


                var testData = {
                    discussion_id: discussionId,
                };
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: `{{ route('show-discussion') }}`,
                    type: 'POST',
                    data: testData,

                    success: function(response) {
                        const comments = Object.values(response.data);
                        displayComments(commentsContainer, comments, authUserId, discussionId);


                    }
                });


                commentModal.show();
            });
        });

        commentForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(commentForm);
            const discussionId = formData.get('discussion_id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('store-comment') }}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // const newComment = response.comment;
                    const comments = Object.values(response.comments);
                    // // Append the new comment to the comments container
                    // console.log(comments);
                    displayComments(commentsContainer, comments, authUserId, discussionId)
                    // console.log(response);
                    commentForm.reset();


                }
            });
        });
    });

    function displayComments(container, comments, authUserId, discussionId = null) {
        container.innerHTML = '';

        comments.forEach(comment => {
            const createdAt = new Date(comment.created_at);
            const formattedDate = `${createdAt.getDate()}/${createdAt.getMonth() + 1}/${createdAt.getFullYear()} ${createdAt.getHours()}:${createdAt.getMinutes()}`;

            // Check if the current user can delete the comment
            const deleteButtonHtml = comment.user.id == authUserId ?
                `<div class="col-1">
                <span id="deleteCommentButton" data-comment-id="${comment.id}" class="btn btn-danger delete-comment-button">Delete</span>
                </div>  
                 <div class="col-2">${formattedDate}   <span style="position:relative"  id="comment_settings" >   <i class='bx bx-dots-vertical-rounded' data-comment-id="${comment.id}"  ></i><span id="popup" class="hidden" >Report </span> </span> </div>` :
                `<div class="col-2">${formattedDate}   <span id="comment_settings"> </span> <a id="popup">Report </a>  </div>`;

            container.innerHTML += `
        <div class="row border p-2 align-items-center">
            <div class="col-1 fw-bold">${comment.user.username}</div>
            <div class="col-8">${comment.comment}</div>
            ${deleteButtonHtml}
          
        </div>
        `;
        });
        const commentSettings = container.querySelectorAll('#comment_settings');

        console.log(commentSettings);
        commentSettings.forEach((button) => {

            button.children[0].addEventListener('click', function(e) {
                button.children[1].classList.toggle('hidden');
                const commentId = this.getAttribute('data-comment-id');;



                button.children[1].addEventListener('click', (e) => {


                    // AJAX CALL to REPORT COMMENT


                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: `/report-comment`,
                        type: 'POST',
                        data: {
                            comment_id: commentId
                        },
                        success: function(response) {
                            // Assuming the server returns the updated list of comments after deletion
                            e.target.style.display = 'none'
                            console.log(response);

                        },
                        error: function(xhr, status, error) {
                            console.error(`Error deleting comment: ${error}`);
                            // Handle error (e.g., show a message to the user)
                        }
                    });


                })
            });
        });
        // Add event listeners for delete buttons
        const deleteButtons = container.querySelectorAll('.delete-comment-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const commentId = this.getAttribute('data-comment-id');;

                deleteComment(commentId, container, comments, authUserId, discussionId);
            });
        });

    }

    function deleteComment(commentId, container, comments, authUserId, discussionId) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: `/delete-comment/${commentId}`,
            type: 'POST',
            data: {
                discussion_id: discussionId
            },
            success: function(response) {
                // Assuming the server returns the updated list of comments after deletion
                const comments = Object.values(response.comments);
                console.log(response);
                displayComments(container, comments, authUserId);
            },
            error: function(xhr, status, error) {
                console.error(`Error deleting comment: ${error}`);
                // Handle error (e.g., show a message to the user)
            }
        });
    }
</script>



@endsection