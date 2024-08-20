@extends('layouts.dashboard-layout')

@section('title', 'Movies')

@section('content')



<div class="container-fluid px-4">
    <a href="{{ route('workers.view-workers') }}" class="btn btn-secondary my-3">View Workers</a>

    <div class="row">

        <h3 class="fs-4 mb-3">Create Movie</h3>
        <div class="col-10">
            <div class="row">
                <form action="{{ route('workers.store-workers') }}" method="post">
                    @csrf <!-- Corrected CSRF token -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
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
                                                <input class="form-check-input" type="checkbox" value="{{ $profession->id }}" id="genre{{ $profession->id }}" name="professions[]">
                                                <label class="form-check-label" for="genre{{ $profession->id }}">
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
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="bio"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>

    </div>
</div>



@endsection