<!DOCTYPE html>
<html>

<head>
    <title>Kine moe</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('icons/film-reel.png') }}">
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- FONT AWSOME  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        function updateForm() {
            var contentType = document.getElementById('type').value;
            document.getElementById('series-fields').style.display = 'none';
            document.getElementById('movie-fields').style.display = 'none';
            document.getElementById('podcast-fields').style.display = 'none';

            if (contentType === 'series') {
                document.getElementById('series-fields').style.display = 'block';
            } else if (contentType === 'movie') {
                document.getElementById('movie-fields').style.display = 'block';
            } else if (contentType === 'podcast') {
                document.getElementById('podcast-fields').style.display = 'block';
            }
        }
    </script>

    <style>
        .banner {
            min-height: 75vh;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 50px;
            margin-bottom: 100px;
        }

        .disabled-link {
            pointer-events: none;
            cursor: default;
            color: #6c757d;
            /* Bootstrap's $secondary color */
            text-decoration: none;
        }

        .disabled-link:hover {
            color: #6c757d;
            /* Ensure the color stays the same on hover */
            text-decoration: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('scripts')
</head>

<body>

    <div class="d-flex" id="wrapper">


        <!-- Sidebar starts here -->

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center-by-4 -primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-user-secret me-2 "></i>Kine moe
            </div>


            <div class="list-group list-group-flush my-3">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>

                <a href="{{ route('dashboard-home') }}" class="list-group-item list-group-item-action bg-transparent second-text active">
                    <i class="fas fa-tachometer-alt me-2"></i>Page VIEW
                </a>
                <a href="{{ route('view-analytics') }}" class="list-group-item list-group-action bg-transparent second-text fw-bold">
                    <i class="fas fa-chart-line me-2"></i>Analytics
                </a>
                <!-- <a href="#" class="list-group-item list-group-action bg-transparent second-text fw-bold">
                    <i class="fas fa-project-diagram me-2"></i>Projects
                </a> -->
                <span class="dropdown list-group-item">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('users.view-users') }}">View Users</a></li>
                        <li><a class="dropdown-item" href="{{ route('users.view-regular-users')}}">Regulars Users</a></li>
                        <li><a class="dropdown-item" href="{{ route('users.view-artist-users')}}">Artists</a></li>
                        <!-- <li> <a class="dropdown-item" href="">Moderators</a></li> -->
                    </ul>
                </span>



                <span class="dropdown list-group-item">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Content
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('contents.create-content') }}">Add new Content</a></li>
                        <li><a class="dropdown-item" href="{{ route('movies.view-movies') }}">Manage Movies</a></li>
                        <li> <a class="dropdown-item" href="{{ route('series.view-series') }}">Manage Series</a></li>
                        <li> <a class="dropdown-item" href="{{ route('podcasts.view-podcasts') }}">Manage Podcasts</a></li>
                    </ul>
                </span>
                <span class="dropdown list-group-item">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Site Parametrics
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('workers.view-workers') }}">Manage Workers</a></li>
                        <li><a class="dropdown-item" href="{{ route('cultures.view-cultures') }}">Manage Cultures</a></li>
                        <li><a class="dropdown-item" href="{{ route('interests.view-interests') }}">Manage Interests</a></li>
                        <li> <a class="dropdown-item" href="{{ route('categories.view-categories') }}">Manage Categoires</a></li>
                        <li> <a class="dropdown-item" href="{{ route('professions.view-professions') }}">Manage Professions</a></li>
                    </ul>
                </span>

                <a href="#" class="list-group-item list-group-action bg-transparent text-danger fw-bold">
                    <i class="fas fa-project-diagram me-2"></i>Logout
                </a>
            </div>
        </div>


        <!-- Sidebar ends here -->


        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">@yield('title')</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(auth()->check())

                                <i class="fas fa-user me-2"></i>{{ auth()->user()->username }}!
                                @endif

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')

        </div>



    </div>



    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        }
    </script>
    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>