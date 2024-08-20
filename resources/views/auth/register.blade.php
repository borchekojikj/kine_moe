@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row" style="margin-top:50px">
        <div class="col-md-6 offset-md-3">
            <h1>Register</h1>
            <hr>

            @livewire('multi-step-form')
        </div>
    </div>
</div>


@endsection