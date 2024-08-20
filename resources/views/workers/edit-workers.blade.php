@extends('layouts.dashboard-layout')

@section('title', 'Movies')

@section('content')



<div class="container-fluid px-4">

    <a href="{{ route('workers.view-workers') }}" class="btn btn-secondary my-3">View Workers</a>
    <a href="{{ route('workers.create-workers') }}" class="btn btn-secondary my-3">Add new Worker</a>
    <div class="row">

        <h3 class="fs-4 mb-3">Edir Workers</h3>
        <div class="col-10">
            <div class="row">
                <form action="{{ route('worker.update-worker', ['id' => $worker->id]) }}" method="post">
                    @csrf <!-- Corrected CSRF token -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $worker->first_name) }}">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $worker->last_name) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Genres</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownGenres" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Professions
                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownGenres">
                                        @foreach($professions as $profession)
                                        <li>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $profession->id }}" id="profession{{ $profession->id }}" name="professions[]" {{ in_array($profession->id, $worker->professions->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="profession{{ $profession->id }}">
                                                    {{ $profession->title }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>

                                </div>
                            </div>



                        </div>


                    </div>



                    <div class="mb-3">
                        <label for="description">Biography</label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="bio">{{ old('bio', $worker->bio) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>

    </div>
</div>



@endsection