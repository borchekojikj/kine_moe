@extends('layouts.dashboard-layout')

@section('title', 'Professions')

@section('content')



<div class="container-fluid px-4">
    <a href="{{ route('interests.view-interests') }}" class="btn btn-secondary my-3">View Interests</a>

    <div class="row">

        <h3 class="fs-4 mb-3">Create Category</h3>
        <div class="col-10">
            <div class="row">
                <form action="{{ route('interests.store-interests') }}" method="post">
                    @csrf <!-- Corrected CSRF token -->
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
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