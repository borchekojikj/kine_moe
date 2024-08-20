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

    <!-- <link rel="stylesheet" href="{{ asset('style.css') }}"> -->

    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">

    <!-- SWEETALERT -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('scripts')
</head>

<body>

    <div class="sidebar close">
        <div class="logo-details">
            <!-- <i class='bx bxl-c-plus-plus'></i> -->
            <span class="mx-3"><img src="{{ asset('icons/logo-test.png') }}" alt="Logo" width="35" style="border-radius: 50%;" class="bg-light "></span>
            <span class="logo_name">kinemoe</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a href="{{ route('dashboard') }}" class="link_name">Dashboard</a></li>

                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Content</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="#" class="link_name">Content</a></li>
                    <li><a href="{{ route('contents.create-content') }}">Add new Content</a></li>
                    <li><a href="{{ route('movies.view-movies') }}">Manage Movies</a></li>
                    <li><a href="{{ route('series.view-series') }}">Manage Series</a></li>
                    <li><a href="{{ route('podcasts.view-podcasts') }}">Manage Podcasts</a></li>



                </ul>
            </li>
            <li>
                <a href="{{ route('view-analytics') }}">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Analytics</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a href="{{ route('view-analytics') }}" class="link_name">Analytics</a></li>




                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="{{ route('users.view-users') }}">
                        <i class='bx bxs-user'></i>
                        <span class="link_name">Users</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="{{ route('users.view-users') }}" class="link_name">Users</a></li>
                    <li><a href="{{ route('users.view-regular-users')}}">Regulars Users</a></li>
                    <li><a href="{{ route('users.view-artist-users')}}">Artists</li>



                </ul>
            </li>




            <li>
                <a href="{{ route('dashboard-home') }}">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Page VIEW</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a href="{{ route('dashboard-home') }}" class="link_name">Page View</a></li>

                </ul>
            </li>

            <li>
                <div class="iocn-link">
                    <a href="{{ route('users.view-users') }}">
                        <i class='bx bx-hard-hat'></i>
                        <span class="link_name">Workers</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a href="{{ route('users.view-users') }}" class="link_name">Workers</a></li>
                    <li><a href="{{ route('workers.view-workers') }}">Manage Workers</a></li>
                    <li><a href="{{ route('cultures.view-cultures') }}">Manage Cultures</a></li>
                    <li><a href="{{ route('interests.view-interests') }}">Manage Interests</a></li>
                    <li><a href="{{ route('categories.view-categories') }}">Manage Categoires</a></li>
                    <li><a href="{{ route('professions.view-professions') }}">Manage Professions</a></li>

                </ul>
            </li>
            <li>
                <a href="{{ route('page-settings') }}">
                    <i class='bx bxs-book-content'></i>
                    <span class="link_name">Site Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a href="{{ route('page-settings') }}" class="link_name">Site Settings</a></li>

                </ul>
            </li>
            <li>
                <a href="/user-profile">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a href="/user-profile" class="link_name">Settings</a></li>

                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="https://images.pexels.com/photos/1178684/pexels-photo-1178684.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile Picture">
                    </div>

                    <div class="name-job">
                        <div class="profile_name">{{ Auth::user()->username }}</div>
                        <div class="job">Web Designer</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>

    </div>
    <section class="home-section">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent  pe-4">
            <div class="home-content">
                <i class='bx bx-menu'></i>
                <span class="text">@yield('title')</span>

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
                            <li><a class="dropdown-item" href="{{ route('/user-profile') }}">Profile</a></li>
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


        <div class="container">

            @yield('content')
        </div>
    </section>

    <script>
        let arrow = document.querySelectorAll('.arrow');

        // console.log(arrow);

        for (let i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener('click', (e) => {
                console.log(e);

                let arrowParrent = e.target.parentElement.parentElement;
                console.log(arrowParrent);

                arrowParrent.classList.toggle("showMenu");
            });

        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener('click', (e) => {
            sidebar.classList.toggle("close");
        })
        // console.log(sidebar);
    </script>
    <!-- POPPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>