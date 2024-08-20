@extends('layouts.dashboard-layout')

@section('title', 'Manage Workers')

@section('content')

@php
$professionsWorker = [];

foreach($workers as $worker){

$worker_professions = $worker->professions;



if (!array_key_exists($worker->id, $professionsWorker)) {
$professionsWorker[$worker->id] = [
'professions' => []
];
}

foreach($worker_professions as $profession){
$professionsWorker[$worker->id]['professions'][$profession->id] = $profession->title;
}

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
        <a href="{{ route('workers.create-workers') }}" class="btn btn-primary my-3">Add new Worker</a>
    </div>
    <div class="table-responsive" style="height: 500px; overflow-y: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <!-- <th scope="col">Bio</th> -->
                    <th scope="col">Professions</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($workers as $worker)
                <tr>
                    <td>{{ $worker->id }}</td>
                    <td>{{ $worker->first_name }}</td>
                    <td>{{ $worker->last_name }}</td>
                    <!-- <td>{{ $worker->bio }}</td> -->
                    <td>
                        @foreach($professionsWorker[$worker->id] as $professions)

                        @foreach($professions as $value)
                        <span>{{ $value}} | </span>
                        @endforeach
                        @endforeach
                    </td>

                    <td>
                        <a class="btn btn-danger" href=" {{ route('workers.delete-worker', ['id' => $worker->id]) }}">Delete</a>
                        <a class="btn btn-warning" href=" {{ route('workers.edit-worker', ['id' => $worker->id]) }}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection