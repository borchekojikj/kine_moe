<div>

    <form wire:submit.prevent="register">


        {{-- STEP 1 --}}
        @if ($currentStep == 1)

        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/10 - Register</div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Enter password" wire:model="password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif
        {{-- STEP 2 --}}
        @if ($currentStep == 2)
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/10 - Choose User Type</div>
                <div class="card-body">
                    <h1>Join as a viewer or artist: </h1>
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="artistType" id="artistTypeRegular" value="2" wire:model="role">
                            <label class="form-check-label" for="artistTypeRegular">
                                Regular
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="artistType" id="artistTypeArtist" value="3" wire:model="role">
                            <label class="form-check-label" for="artistTypeArtist">
                                Artist
                            </label>
                        </div>
                        <span class="text-danger">@error('artistType'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>
        @endif
        {{-- STEP 3 --}}

        @if ($currentStep == 3)
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 3/5 - Interests</div>
                <div class="card-body">
                    <div class="interests mt-2">
                        @foreach($loadedInterests as $interest)
                        <input type="checkbox" id="{{ $interest['title'] }}" value="{{ $interest['id'] }}" wire:model="interests">
                        <label class="btn btn-outline-primary btn-checkbox" for="{{ $interest['title'] }}">{{ $interest['title'] }}</label>
                        @endforeach
                    </div>



                    @if(count($loadedInterests) < $totalInterests) <div class="mt-2">
                        <button type="button" class="btn btn-outline-secondary btn-checkbox" wire:click="loadMoreInterests">Show More</button>
                </div>

                @endif
                <span class="text-danger">@error('interests'){{ $message }}@enderror</span>
            </div>
        </div>
</div>

@endif
{{-- STEP 4 --}}
@if ($currentStep == 4)
<div class="step-four">
    <div class="card">
        <div class="card-header bg-secondary text-white">Exploring style</div>
        <div class="card-body">
            <h1>Choose how do you want to explore: </h1>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="explore_style" id="explore_alone" value="regular" wire:model="explore_style">
                    <label class="form-check-label" for="explore_alone">
                        Show me around
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="explore_style" id="explore_help" value="artist" wire:model="explore_style">
                    <label class="form-check-label" for="explore_help">
                        Explore alone
                    </label>
                </div>
                <span class="text-danger">@error('explore_style'){{ $message }}@enderror</span>
            </div>
        </div>
    </div>
</div>

@endif
{{-- STEP 5 --}}
@if ($currentStep == 5)
<div class="step-five">
    <div class="card border-0">
        <div class="card-header bg-secondary text-white">STEP 5/5 - Subscription Plans</div>
        <div class="card-body">
            <h1>Choose you Sub Plan </h1>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sub_plan" id="type_1" value="1" wire:model="sub_plan">
                    <label class="form-check-label" for="type_1">
                        Type 1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sub_plan" id="type_2" value="2" wire:model="sub_plan">
                    <label class="form-check-label" for="type_2">
                        Type 2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sub_plan" id="type_3" value="3" wire:model="sub_plan">
                    <label class="form-check-label" for="type_3">
                        Type 3
                    </label>
                </div>
                <span class="text-danger">@error('sub_plan'){{ $message }}@enderror</span>
            </div>
        </div>

    </div>
</div>

@endif
{{-- STEP 6 --}}
@if ($currentStep == 6)
<div class="step-six">
    <div class="card">
        <div class="card-header bg-secondary text-white">STEP 1/5 - Personal Details</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">First name</label>
                        <input type="text" class="form-control" placeholder="Enter first name" wire:model="first_name">
                        <span class="text-danger">@error('first_name'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Last name</label>
                        <input type="text" class="form-control" placeholder="Enter last name" wire:model="last_name">
                        <span class="text-danger">@error('last_name'){{ $message }}@enderror</span>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="Enter username" wire:model="username">
                        <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select class="form-control" wire:model="gender">
                            <option value="" selected>Choose gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" class="form-control" placeholder="Enter your age" wire:model="age">
                        <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" cols="2" rows="2" wire:model="description"></textarea>
                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
{{-- STEP 7 --}}
@if ($currentStep == 7)
<div class="step-seven">
    <div class="card">
        <div class="card-header bg-secondary text-white">STEP 3/5 - Culture</div>
        <div class="card-body">

            <div class="interests mt-2">
                @foreach($loadedCultures as $culture)
                <input type="checkbox" id="{{ $culture['title'] }}" value="{{ $culture['id'] }}" wire:model="culture">
                <label class="btn btn-outline-primary btn-checkbox" for="{{ $culture['title'] }}">{{ $culture['title'] }}</label>
                @endforeach
            </div>


            <!-- Show More Button -->

            @if(count($loadedCultures) < $totalCultures) <div class="mt-2">
                <button type="button" class="btn btn-link" wire:click="loadMoreCultures">Show More</button>
        </div>
        @endif


        <span class="text-danger">@error('culture'){{ $message }}@enderror</span>
    </div>
</div>
</div>
@endif
{{-- STEP 8 --}}
@if ($currentStep == 8)
<div class="step-eight">
    <div class="card">
        <div class="card-header bg-secondary text-white">STEP 3/5 - Recommendation, categories</div>
        <div class="card-body">
            <div class="interests mt-2">
                @foreach($loadedCategories as $category)
                <input type="checkbox" id="{{ $category['title'] }}" value="{{ $category['id'] }}" wire:model="recommendations">
                <label class="btn btn-outline-primary btn-checkbox" for="{{ $category['title'] }}">{{ $category['title'] }}</label>
                @endforeach
            </div>
            <!-- Show More Button -->

            @if(count($loadedCategories) < $totalCategories) <div class="mt-2">
                <div class="mt-2">
                    <button type="button" class="btn btn-link" wire:click="loadMoreCategories">Show More</button>
                </div>
                @endif


                <span class="text-danger">@error('recommendations'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
@endif
{{-- STEP 9 --}}

@if ($currentStep == 9)
<div class="step-eight">
    <div class="card">
        <div class="card-header bg-secondary text-white">STEP 3/5 - Frameworks experience</div>
        <div class="card-body">



            <div class="mt-2">


                @foreach($notificationsDB as $notification)
                <input type="checkbox" id="{{$notification->title}}" value="{{$notification->id}}" wire:model="notifications">
                <label class="form-check-label" for="{{$notification->title}}">{{$notification->title}}</label>
                @endforeach




            </div>
            <span class="text-danger">@error('notifications'){{ $message }}@enderror</span>
        </div>
    </div>
</div>

@endif
{{-- STEP 10 --}}

@if ($currentStep == 10)
<div class="step-five">
    <div class="card border-0">
        <div class="card-header bg-secondary text-white">STEP 5/5 - Subscription Plans</div>
        <div class="card-body">
            <h1>Choose you Sub Plan </h1>
            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="privacy" id="public" value="1" wire:model="privacy">
                    <label class="form-check-label" for="public">
                        Public
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="privacy" id="my-friends" value="2" wire:model="privacy">
                    <label class="form-check-label" for="my-friends">
                        My Friends
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="privacy" id="only-me" value="3" wire:model="privacy">
                    <label class="form-check-label" for="only-me">
                        Only Me
                    </label>
                </div>
                <span class="text-danger">@error('privacy'){{ $message }}@enderror</span>
            </div>
        </div>

    </div>
</div>
@endif
<div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

    @if ($currentStep == 1)
    <div></div>
    @endif

    @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 || $currentStep == 8 || $currentStep == 9|| $currentStep == 10)
    <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
    @endif

    @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5 || $currentStep == 6 || $currentStep == 7 || $currentStep == 8 || $currentStep == 9)
    <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
    @endif


    @if ($currentStep == 10)
    <button type="submit" class="btn btn-md btn-primary">Submit</button>
    @endif


</div>
</form>
</div>