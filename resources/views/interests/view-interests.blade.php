@extends('layouts.dashboard-layout')

@section('title', 'Manage Interests')

@section('content')

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
        <a href="{{ route('interests.create-interests') }}" class="btn btn-primary my-3">Add new Interest</a>
    </div>
    <div class="table-responsive" style="height: 500px; overflow-y: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($interests as $interest)
                <tr>

                    <td>{{ $interest->id }}</td>
                    <td>{{ $interest->title }}</td>
                    <td>

                        <a href="{{ route('interests.delete-interest', ['id' => $interest->id]) }}" class="btn btn-danger">Delete</a>
                        <a href="{{ route('interests.edit-interest', ['id' => $interest->id]) }}" class="btn btn-warning">Edit</a>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection