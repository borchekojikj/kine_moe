<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Content</title>
    <script>
        function updateForm() {
            var contentType = document.getElementById('type').value;
            document.getElementById('series-fields').style.display = 'none';
            document.getElementById('movie-fields').style.display = 'none';
            document.getElementById('podcast-fields').style.display = 'none';

            if (contentType === 'series') {
                document.getElementById('series-fields').style.display = 'block';
            } else if (contentType === 'movie') {
                document.getElementById('movie-fields').style.display = 'block';
            } else if (contentType === 'podcast') {
                document.getElementById('podcast-fields').style.display = 'block';
            }
        }
    </script>
</head>

<body>

    <?php

    use App\Models\Category;
    use App\Models\Content;
    use App\Models\Profession;
    use App\Models\Worker;
    use Illuminate\Support\Facades\DB;
    use PSpell\Config;

    // function attachWorkersToContent($contentId, $workerIds, $professionTitle)
    // {
    //     $professionId = Profession::where('title', $professionTitle)->value('id');

    //     $workerData = array_map(function ($workerId) use ($contentId, $professionId) {
    //         return [
    //             'content_id' => $contentId,
    //             'worker_id' => $workerId,
    //             'profession_id' => $professionId,
    //         ];
    //     }, $workerIds);

    //     DB::table('content_workers_professions')->insert($workerData);
    // }
    $content = Content::find(83);
    $actorProfessionId = Profession::where('title', 'Actor')->value('id');
    $cast = Worker::whereHas('professions', function ($query) use ($actorProfessionId) {
        $query->where('professions.id', $actorProfessionId); // specify the table name for the 'id' column
    })->inRandomOrder()->limit(rand(1, 4))->pluck('workers.id')->toArray();
    attachWorkersToContent($content->id, $cast, 'Actor');
    dd($cast);
    ?>


    <h2>Add New Content</h2>
    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif
    <form action="" method="POST">
        @csrf
        <label for="type">Select content type:</label>
        <select id="type" name="type" onchange="updateForm()">
            <option value="series">Series</option>
            <option value="movie">Movie</option>
            <option value="podcast">Podcast</option>
        </select>

        <div id="series-fields" style="display: block;">
            <h3>Series</h3>
            <label for="series-title">Title:</label>
            <input type="text" id="series-title" name="title" required>
            <label for="series-title">TEst:</label>
            <input type="text" id="series-title" name="title" required>
            <!-- Add more series-specific fields here -->
        </div>

        <div id="movie-fields" style="display: none;">
            <h3>Movie</h3>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="release_date" class="form-label">Release date</label>
                        <input type="date" class="form-control" id="release_date" name="release_date">
                    </div>
                    <div class="mb-3">
                        <label for="content_link" class="form-label">Content Link</label>
                        <input type="text" class="form-control" id="content_link" name="content_link">
                    </div>



                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
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
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="genre{{ $category->id }}" name="genres[]">
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
                                                <input class="form-check-input" type="checkbox" value="{{ $writer->id }}" id="writer{{ $writer->id }}" name="writers[]">
                                                <label class="form-check-label" for="writer{{ $writer->id }}">
                                                    {{ $writer->first_name . ' ' .  $writer->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Cast -->
                            <div class="mb-3">
                                <label class="form-label">Cast</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCast" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Cast
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownCast">
                                        @foreach($actors as $actor)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $actor->id }}" id="cast{{ $actor->id }}" name="cast[]">
                                                <label class="form-check-label" for="cast{{ $actor->id }}">
                                                    {{ $actor->first_name . ' ' .  $actor->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Director -->
                            <div class="mb-3">
                                <label class="form-label ">Director</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownDirector" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Director
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownDirector">
                                        @foreach($directors as $director)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $director->id }}" id="director{{ $director->id }}" name="director">
                                                <label class="form-check-label" for="director{{ $director->id }}">
                                                    {{ $director->first_name . ' ' .  $director->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="col-6">
                            <!-- Producer -->
                            <div class="mb-3">
                                <label class="form-label">Producer</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownProducer" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Producer
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownProducer">
                                        @foreach($producers as $producer)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $producer->id }}" id="producer{{ $producer->id }}" name="producer">
                                                <label class="form-check-label" for="producer{{ $producer->id }}">
                                                    {{ $producer->first_name . ' ' .  $producer->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Cinematographer -->
                            <div class="mb-3">
                                <label class="form-label">Cinematographer</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCinematographer" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Cinematographer
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownCinematographer">
                                        @foreach($cinematographers as $cinematographer)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $cinematographer->id }}" id="cinematographer{{ $cinematographer->id }}" name="cinematographer">
                                                <label class="form-check-label" for="cinematographer{{ $cinematographer->id }}">
                                                    {{ $cinematographer->first_name . ' ' .  $cinematographer->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Editor -->
                            <div class="mb-3">
                                <label class="form-label">Editor</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownEditor" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Editor
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownEditor">
                                        @foreach($editors as $editor)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $editor->id }}" id="editor{{ $editor->id }}" name="editor">
                                                <label class="form-check-label" for="editor{{ $editor->id }}">
                                                    {{ $editor->first_name . ' ' .  $editor->last_name }}
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Costume Design -->
                            <div class="mb-3">
                                <label class="form-label">Costume Design</label>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle w-75" type="button" id="dropdownCostumeDesign" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Costume Design
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownCostumeDesign">
                                        @foreach($costume_designers as $designer)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $designer->id }}" id="costumeDesigner{{ $designer->id }}" name="costume_designers[]">
                                                <label class="form-check-label" for="costumeDesigner{{ $designer->id }}">
                                                    {{ $designer->first_name . ' ' .  $designer->last_name }}
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

            </div>
        </div>

        <div id="podcast-fields" style="display: none;">
            <h3>Podcast</h3>
            <label for="podcast-title">Title:</label>
            <input type="text" id="podcast-title" name="title" required>
            <!-- Add more podcast-specific fields here -->
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>


<form action="{{ route('store-discussion') }}" method="post">
    @csrf <!-- Corrected CSRF token -->
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content_id" class="form-label">Choose content</label>
                <select class="form-select" id="content_id" name="content_id">
                    <option value="" disabled selected>Select content</option>
                    @foreach($contents as $content)
                    <option value="{{ $content->id }}">{{ $content->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>


    </div>




    <button type="submit" class="btn btn-primary">Submit</button>

</form>