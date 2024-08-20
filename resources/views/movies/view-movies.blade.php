@extends('layouts.dashboard-layout')

@section('title', 'Manage Movies')

@section('content')

@php
use App\Models\Profession;

$movieWorkers = [];

foreach ($movies as $movie) {
$contentWorkers = $movie->workers;
$array = [];

foreach ($contentWorkers as $worker) {
$profession_id = $worker->pivot->profession_id;
$profession = Profession::find($profession_id);
$profession_title = $profession->title;

// Check if the profession is already in the array
if (!array_key_exists($profession_title, $array)) {
$array[$profession_title] = [
'workers' => []
];
}

// Add the worker to the corresponding profession group
$array[$profession_title]['workers'][] = $worker;
}

$movieWorkers[$movie->id] = [
'title' => $movie->title, // Add title to the movieWorkers array
'data' => $array
];
}
@endphp



<div class="container-fluid px-4">
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="text-start">
            <input type="text" id="search" placeholder="Search" class="form-control">
        </div>
        <a href="{{ route('contents.create-content') }}" class="btn btn-primary">Add new Content</a>
    </div>

    @if(count($movieWorkers) === 0)
    <div class="alert alert-info" role="alert">
        There are no movies in the database.
    </div>
    @else
    <div class="table-responsive" style="height: 500px; overflow-y: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Director</th>
                    <th scope="col">Cast</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movieWorkers as $movieID => $movieData)
                <tr>
                    <td>{{ $movieID }}</td>
                    <td>{{ $movieData['title'] }}</td>
                    <td>
                        @if (array_key_exists('Director', $movieData['data']) && count($movieData['data']['Director']['workers']) > 0)
                        {{ $movieData['data']['Director']['workers'][0]->first_name }}
                        @else
                        N/A
                        @endif
                    </td>
                    <td>
                        @if (array_key_exists('Actor', $movieData['data']) && count($movieData['data']['Actor']['workers']) > 0)
                        @foreach($movieData['data']['Actor']['workers'] as $actor)
                        {{ $actor->first_name . " " . $actor->last_name }}
                        @if (!$loop->last), @endif
                        @endforeach
                        @else
                        N/A
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ route('movies.delete-movie', ['id' => $movieID]) }}">Delete</a>
                        <a class="btn btn-warning" href="{{ route('movies.edit-movie', ['id' => $movieID]) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection