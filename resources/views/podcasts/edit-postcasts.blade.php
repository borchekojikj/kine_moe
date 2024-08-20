@extends('layouts.dashboard-layout')

@section('title', 'Manage Content')

@section('content')



<div class="container-fluid px-4">
    <div class="row">
        <div class="text-end">
            <a href="{{ route('movies.view-movies') }}" class="btn btn-primary my-3">Manage Movies</a>
            <a href="{{ route('series.view-series') }}" class="btn btn-primary my-3">Manage Series</a>
            <a href="{{ route('podcasts.view-podcasts') }}" class="btn btn-primary my-3">Manage Podcasts</a>
        </div>




        <!-- Podcasts -->
        <div id="podcast-fields">
            <h3>Add new Podcast</h3>
            <form action="{{ route('podcasts.update-podcasts', ['id'=> $podcast->id]) }}" method="post">
                @csrf <!-- Corrected CSRF token -->
                <div class="row">

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $podcast->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date', $podcast->release_date) }}">
                        </div>
                        <div class="mb-3">
                            <label for="content_link" class="form-label">Content Link</label>
                            <input type="text" class="form-control" id="content_link" name="content_link" value="{{ old('content_link', $podcast->content_link) }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <!-- Genres -->
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]" {{ in_array($category->id, $podcast->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]" {{ in_array($writer->id, $filteredWorkers['21']) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' . $writer->last_name }}
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $host->id }}" id="host{{ $host->id }}" name="hosts[]" {{ in_array($host->id, $filteredWorkers['35']) ? 'checked' : '' }}>
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
                                    <label class="form-label ">Graphic Designers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Graphic Designer
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($graphic_designers as $graphic_designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $graphic_designer->id }}" id="graphic_designer{{ $graphic_designer->id }}" name="graphic_designers[]" {{ in_array($graphic_designer->id, $filteredWorkers['33']) ? 'checked' : '' }}>
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
                                <!-- Producers -->
                                <div class="mb-3">
                                    <label class="form-label">Producers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownProducers" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Producers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownProducers">
                                            @foreach($producers as $producer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producers[]" {{ in_array($producer->id, $filteredWorkers['24']) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' . $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Cinematographers -->
                                <div class="mb-3">
                                    <label class="form-label">Cinematographers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCinematographers" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Cinematographers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCinematographers">
                                            @foreach($cinematographers as $cinematographer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographers[]" {{ in_array($cinematographer->id,$filteredWorkers['25']) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' . $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- Editors -->
                                <div class="mb-3">
                                    <label class="form-label">Editors</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditors" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Editors
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownEditors">
                                            @foreach($editors as $editor)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editors[]" {{ in_array($editor->id, $filteredWorkers['26']) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' . $editor->last_name }}
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $manager->id }}" id="manager{{ $manager->id }}" name="managers[]" {{ in_array($manager->id, $filteredWorkers['34']) ? 'checked' : '' }}>
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
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"> {{ old('description', $podcast->description) }} </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <!-- Add more podcast-specific fields here -->
        </div>



    </div>
</div>



@endsection