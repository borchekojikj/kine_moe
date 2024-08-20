@extends('layouts.dashboard-layout')

@section('title', 'Movies')

@section('content')



<div class="container-fluid px-4">
    <a href="{{ route('movies.view-movies') }}" class="btn btn-secondary my-3">View Movies</a>
    <div class="row">



        <div class="my-3"> <label for="type">Select content type:</label>
            <select id="type" name="type" onchange="updateForm()">
                <option value="" selected disabled>Choose</option>
                <option value="series">Series</option>
                <option value="movie">Movie</option>
                <option value="podcast">Podcast</option>
            </select>

        </div>


        <!-- Series -->
        <div id="series-fields" style="display: none;">
            <h3>Add new Series</h3>
            <form action="{{ route('series.store-series') }}" method="post">
                @csrf <!-- Corrected CSRF token -->
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date">
                        </div>
                        <div class="mb-3">
                            <label for="content_link" class="form-label">Content Link</label>
                            <input type="text" class="form-control" id="content_link" name="content_link">
                        </div>



                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Genres</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownGenres" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Genres
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownGenres">
                                            @foreach($categories as $category)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]">
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Writers -->
                                <div class="mb-3">
                                    <label class="form-label">Writers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownWriters" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Writers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownWriters">
                                            @foreach($writers as $writer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]">
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cast -->
                                <div class="mb-3">
                                    <label class="form-label">Cast</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCast" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cast
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCast">
                                            @foreach($actors as $actor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $actor->id }}" id="cast{{ $actor->id }}" name="cast[]">
                                                    <label class="form-check-label" for="cast{{ $actor->id }}">
                                                        {{ $actor->first_name . ' ' .  $actor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Director -->
                                <div class="mb-3">
                                    <label class="form-label ">Director</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Director
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($directors as $director)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="director">
                                                    <label class="form-check-label" for="director{{ $director->id }}">
                                                        {{ $director->first_name . ' ' .  $director->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>

                            <div class="col-6">
                                <!-- Producer -->
                                <div class="mb-3">
                                    <label class="form-label">Producer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownProducer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Producer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownProducer">
                                            @foreach($producers as $producer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producer">
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cinematographer -->
                                <div class="mb-3">
                                    <label class="form-label">Cinematographer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCinematographer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cinematographer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCinematographer">
                                            @foreach($cinematographers as $cinematographer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographer">
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mb-3">
                                    <label class="form-label">Editor</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditor" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Editor
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEditor">
                                            @foreach($editors as $editor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editor">
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Costume Design -->
                                <div class="mb-3">
                                    <label class="form-label">Costume Design</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCostumeDesign" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Costume Design
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCostumeDesign">
                                            @foreach($costume_designers as $designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $designer->id }}" id="costumeDesigner{{ $designer->id }}" name="costume_designers[]">
                                                    <label class="form-check-label" for="costumeDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>



                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

        <!-- Movies -->
        <div id="movie-fields" style="display: none;">
            <h3>Add new Movie</h3>
            <form action="{{ route('movies.store-movies') }}" method="post">
                @csrf <!-- Corrected CSRF token -->
                <input type="hidden" value="1" name="type">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date">
                        </div>
                        <div class="mb-3">
                            <label for="content_link" class="form-label">Content Link</label>
                            <input type="text" class="form-control" id="content_link" name="content_link">
                        </div>



                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Genres</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownGenres" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Genres
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownGenres">
                                            @foreach($categories as $category)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]">
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Writers -->
                                <div class="mb-3">
                                    <label class="form-label">Writers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownWriters" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Writers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownWriters">
                                            @foreach($writers as $writer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]">
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cast -->
                                <div class="mb-3">
                                    <label class="form-label">Cast</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCast" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cast
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCast">
                                            @foreach($actors as $actor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $actor->id }}" id="cast{{ $actor->id }}" name="cast[]">
                                                    <label class="form-check-label" for="cast{{ $actor->id }}">
                                                        {{ $actor->first_name . ' ' .  $actor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Director -->
                                <div class="mb-3">
                                    <label class="form-label ">Director</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Director
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($directors as $director)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="director">
                                                    <label class="form-check-label" for="director{{ $director->id }}">
                                                        {{ $director->first_name . ' ' .  $director->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>

                            <div class="col-6">
                                <!-- Producer -->
                                <div class="mb-3">
                                    <label class="form-label">Producer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownProducer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Producer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownProducer">
                                            @foreach($producers as $producer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producer">
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cinematographer -->
                                <div class="mb-3">
                                    <label class="form-label">Cinematographer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCinematographer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cinematographer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCinematographer">
                                            @foreach($cinematographers as $cinematographer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographer">
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mb-3">
                                    <label class="form-label">Editor</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditor" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Editor
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEditor">
                                            @foreach($editors as $editor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editor">
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Costume Design -->
                                <div class="mb-3">
                                    <label class="form-label">Costume Design</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCostumeDesign" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Costume Design
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCostumeDesign">
                                            @foreach($costume_designers as $designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $designer->id }}" id="costumeDesigner{{ $designer->id }}" name="costume_designers[]">
                                                    <label class="form-check-label" for="costumeDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>



                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

        <!-- Podcasts -->
        <div id="podcast-fields" style="display: none;">
            <h3>Podcast</h3>
            <form action="{{ route('podcasts.store-podcasts') }}" method="post">
                @csrf <!-- Corrected CSRF token -->
                <div class="row">

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date">
                        </div>
                        <div class="mb-3">
                            <label for="content_link" class="form-label">Content Link</label>
                            <input type="text" class="form-control" id="content_link" name="content_link">
                        </div>



                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Genres</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownGenres" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Genres
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownGenres">
                                            @foreach($categories as $category)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]">
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Writers -->
                                <div class="mb-3">
                                    <label class="form-label">Writers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownWriters" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Writers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownWriters">
                                            @foreach($writers as $writer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]">
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>



                                <!-- Host -->
                                <div class="mb-3">
                                    <label class="form-label ">Hosts</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Host
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($hosts as $host)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $host->id }}" id="host{{ $host->id }}" name="hosts[]">
                                                    <label class="form-check-label" for="host{{ $host->id }}">
                                                        {{ $host->first_name . ' ' .  $host->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Graphic Designer -->
                                <div class="mb-3">
                                    <label class="form-label ">Graphic Designer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Graphic Designer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($graphic_designers as $graphic_designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $graphic_designer->id }}" id="graphic_designer{{ $graphic_designer->id }}" name="graphic_designers[]">
                                                    <label class="form-check-label" for="graphic_designer{{ $graphic_designer->id }}">
                                                        {{ $graphic_designer->first_name . ' ' .  $graphic_designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>


                            </div>

                            <div class="col-6">
                                <!-- Producer -->
                                <div class="mb-3">
                                    <label class="form-label">Producers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownProducer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Producer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownProducer">
                                            @foreach($producers as $producer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producer[]">
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <!-- Cinematographer -->
                                <div class="mb-3">
                                    <label class="form-label">Cinematographer</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCinematographer" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cinematographer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCinematographer">
                                            @foreach($cinematographers as $cinematographer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographer">
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Editor -->
                                <div class="mb-3">
                                    <label class="form-label">Editor</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditor" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Editors
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEditor">
                                            @foreach($editors as $editor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editors[]">
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Manager -->
                                <div class="mb-3">
                                    <label class="form-label">Manager</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditor" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Manager
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEditor">
                                            @foreach($managers as $manager)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $manager->id }}" id="manager{{ $manager->id }}" name="managers[]">
                                                    <label class="form-check-label" for="manager{{ $manager->id }}">
                                                        {{ $manager->first_name . ' ' .  $manager->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                </div>



                <div class="mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <!-- Add more podcast-specific fields here -->
        </div>



    </div>
</div>



@endsection