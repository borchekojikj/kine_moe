@extends('layouts.dashboard-layout')

@section('title', 'Edit Series')

@section('content')


<div class="container-fluid px-4">
    <a href="{{ route('series.view-series') }}" class="btn btn-secondary my-3">View Series</a>
    <a href="{{ route('series.create-series') }}" class="btn btn-secondary my-3">Add new Series</a>
    <div class="row">

        <div class="col-10">
            <div class="row">
                <form action="{{ route('series.update-series', ['id'=> $movie->id]) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $movie->title) }}">
                            </div>
                            <div class="mb-3">
                                <label for="release_date" class="form-label">Release date</label>
                                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ old('release_date', $movie->release_date) }}">
                            </div>
                            <div class="mb-3">
                                <label for="content_link" class="form-label">Content Link</label>
                                <input type="text" class="form-control" id="content_link" name="content_link" value="{{ old('content_link', $movie->content_link) }}">
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
                                                        <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]" {{ in_array($category->id, $movie->categories->pluck('id')->toArray()) ? 'checked' : '' }}>
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

                                    <!-- Actors -->
                                    <div class="mb-3">
                                        <label class="form-label">Cast</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownActors" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Actors
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownActors">
                                                @foreach($actors as $actor)
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ $actor->id }}" id="actor{{ $actor->id }}" name="cast[]" {{ in_array($actor->id, $filteredWorkers['22']) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="actor{{ $actor->id }}">
                                                            {{ $actor->first_name . ' ' . $actor->last_name }}
                                                        </label>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Directors -->
                                    <div class="mb-3">
                                        <label class="form-label">Directors</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirectors" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Directors
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownDirectors">
                                                @foreach($directors as $director)
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="director" {{ in_array($director->id,  $filteredWorkers['23']) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="director{{ $director->id }}">
                                                            {{ $director->first_name . ' ' . $director->last_name }}
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
                                                        <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producer" {{ in_array($producer->id, $filteredWorkers['24']) ? 'checked' : '' }}>
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
                                                        <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographer" {{ in_array($cinematographer->id,$filteredWorkers['25']) ? 'checked' : '' }}>
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


                                    <!-- Costume Desingers -->
                                    <div class="mb-3">
                                        <label class="form-label">Costume Desingers</label>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDesigners" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Desingers
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownDesigners">
                                                @foreach($costume_designers as $costume_designer)
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="{{ $costume_designer->id }}" id="costume_designer{{ $costume_designer->id }}" name="costume_designers[]" {{ in_array($costume_designer->id, $filteredWorkers['27']) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="costume_designer{{ $costume_designer->id }}">
                                                            {{ $costume_designer->first_name . ' ' . $costume_designer->last_name }}
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

                        </di v>

                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description">{{ old('description', $movie->description) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection