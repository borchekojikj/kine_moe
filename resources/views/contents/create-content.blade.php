@extends('layouts.dashboard-layout')

@section('title', 'Manage Content')

@section('content')

@foreach(['title','release_date','content_link','photo_url','genres','writers','cast','directors','producers','cinematographers','editors','costume_designers','description'] as $field)
@error($field)
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var test = document.getElementById('movie-fields');
        console.log(test);
        test.style.display = 'block';
    });
</script>
@enderror

@endforeach


@foreach(['series_title','series_release_date','series_content_link','series_photo_url','series_genres','series_writers','series_cast','series_directors','series_producers','series_cinematographers','series_editors','series_costume_designers','series_description'] as $field)
@error($field)
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var test1 = document.getElementById('series-fields');
        console.log(test1);
        test1.style.display = 'block';
    });
</script>
@enderror

@endforeach

@foreach(['podcast_title','podcast_photo_url','podcast_release_date','podcast_content_link','podcast_photo_url','podcast_genres','podcast_writers','podcast_cast','podcast_director','podcast_producer','podcast_cinematographer','podcast_editor','podcast_costume_designers','podcast_description'] as $field)
@error($field)
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var test2 = document.getElementById('podcast-fields');
        console.log(test2);
        test2.style.display = 'block';
    });
</script>
@enderror

@endforeach






<div class="container-fluid px-4">
    <div class="row">
        <div class="text-end">
            <a href="{{ route('movies.view-movies') }}" class="btn btn-primary my-3">Manage Movies</a>
            <a href="{{ route('series.view-series') }}" class="btn btn-primary my-3">Manage Series</a>
            <a href="{{ route('podcasts.view-podcasts') }}" class="btn btn-primary my-3">Manage Podcasts</a>
        </div>

        <div class=" mb-4 w-25">
            <div class="card">
                <div class="card-header bg-secondary text-white h5">
                    Insert new Content
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="type" class="form-label">Select content type:</label>
                        <select id="type" name="type" class="form-select" onchange="updateForm()">
                            <option value="" selected disabled>Choose</option>
                            <option value="series">Series</option>
                            <option value="movie">Movie</option>
                            <option value="podcast">Podcast</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Movies -->
        <div id="movie-fields" style="display: none;">
            <h3>Add new Movie</h3>
            <form action=" {{ route('movies.store-movies') }}" method="post" enctype="multipart/form-data">
                @csrf <!-- Corrected CSRF token -->
                <input type="hidden" value="1" name="type">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="release_date" class="form-label">Release date</label>
                            <input type="date" class="form-control @error('release_date') is-invalid @enderror" id="release_date" name="release_date" value="{{ old('release_date') }}">
                            @error('release_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content_link" class="form-label">Content Link</label>
                            <input type="text" class="form-control @error('content_link') is-invalid @enderror" id="content_link" name="content_link" value="{{ old('content_link') }}">
                            @error('content_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo_url" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('photo_url') is-invalid @enderror" id="photo_url" name="photo_url">
                            @error('photo_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror



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
                                                    <input class="form-check-input " type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]" {{ in_array($category->id, old('genres', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('genres')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]" {{ in_array($writer->id, old('writers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('writers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $actor->id }}" id="cast{{ $actor->id }}" name="cast[]" {{ in_array($actor->id, old('cast', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cast{{ $actor->id }}">
                                                        {{ $actor->first_name . ' ' .  $actor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('cast')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="directors[]" {{ old('director') == $director->id ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="director{{ $director->id }}">
                                                        {{ $director->first_name . ' ' .  $director->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('directors')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producers[]" {{ old('producer') == $producer->id ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('producers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographers[]" {{ old('cinematographer') == $cinematographer->id ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('cinematographers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input @error('editor') is-invalid @enderror" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editors[]" {{ old('editor') == $editor->id ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('editors')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Costume Design -->
                                <div class="mb-3">
                                    <label class="form-label">Costume Designers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCostumeDesigners" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Costume Designers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCostumeDesigners">
                                            @foreach($costume_designers as $designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input @error('costume_designers') is-invalid @enderror" type="checkbox" value="{{ $designer->id }}" id="costumeDesigner{{ $designer->id }}" name="costume_designers[]" {{ in_array($designer->id, old('costume_designers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="costumeDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('costume_designers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                </div>



                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        <!-- Series -->
        <div id="series-fields" style="display: none;">
            <h3>Add new Series</h3>
            <form action="{{ route('series.store-series') }}" method="post">
                @csrf <!-- Corrected CSRF token -->
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="titleSeries" class="form-label">Title</label>
                            <input type="text" class="form-control @error('series_title') is-invalid @enderror" id="titleSeries" name="series_title" value="{{ old('series_title') }}">
                            @error('series_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="release_date_series" class="form-label">Release date</label>
                            <input type="date" class="form-control @error('series_release_date') is-invalid @enderror" id="release_date_series" name="series_release_date" value="{{ old('series_release_date') }}">
                            @error('series_release_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content_link_series" class="form-label">Content Link</label>
                            <input type="text" class="form-control @error('series_content_link') is-invalid @enderror" id="content_link_series" name="series_content_link" value="{{ old('series_content_link') }}">
                            @error('series_content_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="photo_url" class="form-label">Photo</label>
                            <input type="text" class="form-control @error('series_photo_url') is-invalid @enderror" id="photo_url" name="series_photo_url" value="{{ old('series_photo_url') }}">
                            @error('series_photo_series')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="series_genres[]" {{ in_array($category->id, old('series_genres', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_genres')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="series_writers[]" {{ in_array($writer->id, old('series_writers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_writers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input r" type="checkbox" value="{{ $actor->id }}" id="cast{{ $actor->id }}" name="series_cast[]" {{ in_array($actor->id, old('series_cast', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cast{{ $actor->id }}">
                                                        {{ $actor->first_name . ' ' .  $actor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_cast')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Director -->
                                <div class="mb-3">
                                    <label class="form-label">Director</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Director
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                            @foreach($directors as $director)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input r" type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="series_directors[]" {{ in_array($director->id, old('series_director', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="director{{ $director->id }}">
                                                        {{ $director->first_name . ' ' .  $director->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_directors')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="series_producers[]" {{ in_array($producer->id, old('series_producer', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_producers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="series_cinematographers[]" {{ in_array($cinematographer->id, old('series_cinematographer', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_cinematographers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="series_editors[]" {{ in_array($editor->id, old('series_editor', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_editors')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $designer->id }}" id="costumeDesigner{{ $designer->id }}" name="series_costume_designers[]" {{ in_array($designer->id, old('series_costume_designers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="costumeDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('series_costume_designers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('series_description') is-invalid @enderror" placeholder="Leave a comment here" id="description" name="series_description">{{ old('series_description') }}</textarea>
                    @error('series_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>




        <!-- Podcasts -->
        <div id="podcast-fields" style="display: none;">
            <h3>Add New Podcast</h3>
            <form action="{{ route('podcasts.store-podcasts') }}" method="post" enctype="multipart/form-data">
                @csrf <!-- Corrected CSRF token -->
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="titlePodcast" class="form-label">Title</label>
                            <input type="text" class="form-control @error('podcast_title') is-invalid @enderror" id="titlePodcast" name="podcast_title" value="{{ old('podcast_title') }}">
                            @error('podcast_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="release_date_podcast" class="form-label">Release Date</label>
                            <input type="date" class="form-control @error('podcast_release_date') is-invalid @enderror" id="release_date_podcast" name="podcast_release_date" value="{{ old('podcast_release_date') }}">
                            @error('podcast_release_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="content_link_podcast" class="form-label">Content Link</label>
                            <input type="text" class="form-control @error('podcast_content_link') is-invalid @enderror" id="content_link_podcast" name="podcast_content_link" value="{{ old('podcast_content_link') }}">
                            @error('podcast_content_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="podcast_photo_url" class="form-label">Photo</label>
                            <input type="file" class="form-control @error('podcast_photo') is-invalid @enderror" id="podcast_photo_url" name="podcast_photo_url">
                            @error('podcast_photo_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="podcast_genres[]" {{ in_array($category->id, old('podcast_genres', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="genre{{ $category->id }}">
                                                        {{ $category->title }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_genres')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="podcast_writers[]" {{ in_array($writer->id, old('podcast_writers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="writer{{ $writer->id }}">
                                                        {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_writers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Hosts -->
                                <div class="mb-3">
                                    <label class="form-label">Hosts</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownHosts" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Hosts
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownHosts">
                                            @foreach($hosts as $host)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input " type="checkbox" value="{{ $host->id }}" id="host{{ $host->id }}" name="podcast_hosts[]" {{ in_array($host->id, old('podcast_hosts', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="host{{ $host->id }}">
                                                        {{ $host->first_name . ' ' .  $host->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_hosts')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Graphic Designers -->
                                <div class="mb-3">
                                    <label class="form-label">Graphic Designers</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownGraphicDesigners" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Graphic Designers
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownGraphicDesigners">
                                            @foreach($graphic_designers as $designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input " type="checkbox" value="{{ $designer->id }}" id="graphicDesigner{{ $designer->id }}" name="podcast_graphic_designers[]" {{ in_array($designer->id, old('podcast_graphic_designers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="graphicDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_graphic_designers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="podcast_producers[]" {{ in_array($producer->id, old('podcast_producers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="producer{{ $producer->id }}">
                                                        {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_producers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="podcast_cinematographers[]" {{ in_array($cinematographer->id, old('podcast_cinematographers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                        {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_cinematographers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
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
                                                    <input class="form-check-input " type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="podcast_editors[]" {{ in_array($editor->id, old('podcast_editors', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="editor{{ $editor->id }}">
                                                        {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_editors')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Costume Design -->
                                <div class="mb-3">
                                    <label class="form-label">Costume Design</label>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCostumeDesigns" data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Costume Designs
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownCostumeDesigns">
                                            @foreach($costume_designers as $designer)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input " type="checkbox" value="{{ $designer->id }}" id="customDesigner{{ $designer->id }}" name="podcast_costume_designers[]" {{ in_array($designer->id, old('podcast_costume_designers', [])) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="customDesigner{{ $designer->id }}">
                                                        {{ $designer->first_name . ' ' .  $designer->last_name }}
                                                    </label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @error('podcast_costume_designers')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('podcast_description') is-invalid @enderror" placeholder="Leave a comment here" id="description" name="podcast_description">{{ old('podcast_description') }}</textarea>
                    @error('podcast_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>



    </div>
</div>



@endsection