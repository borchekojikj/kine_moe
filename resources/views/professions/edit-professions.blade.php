@extends('layouts.dashboard-layout')

@section('title', 'Professions')

@section('content')



<div class="container-fluid px-4">
    <a href="{{ route('professions.view-professions') }}" class="btn btn-secondary my-3">View Professions</a>
    <a href="{{ route('professions.create-professions') }}" class="btn btn-secondary my-3">Add new Profession</a>


    <div class="row">

        <h3 class="fs-4 mb-3">Create Profession</h3>
        <div class="col-10">
            <div class="row">
                <form action="{{ route('professions.update-profession', ['id'=> $profession->id]) }}" method="post">
                    @csrf <!-- Corrected CSRF token -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $profession->title) }}">
                            </div>
                        </div>


                    </div>




                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>
        </div>

    </div>
</div>



@endsection