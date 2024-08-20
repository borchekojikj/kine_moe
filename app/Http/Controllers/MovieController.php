<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Profession;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Content::all()->where('content_type', 1);
        return view('movies.view-movies', compact('movies'));
    }


    public function create()
    {

        $categories  = Category::all();
        $writers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'writer');
        })->get();

        $actors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'actor');
        })->get();

        $directors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'director');
        })->get();

        $producers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'producer');
        })->get();

        $cinematographers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'cinematographer');
        })->get();

        $editors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'editor');
        })->get();
        $costume_designers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Costume designer');
        })->get();

        $hosts = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Host');
        })->get();
        $managers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Manager');
        })->get();

        $graphic_designers =  Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Graphic Designer');
        })->get();
        return view('movies.create-movies', compact('categories', 'writers', 'actors', 'directors', 'producers', 'cinematographers', 'editors', 'costume_designers', 'hosts', 'managers', 'graphic_designers'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'release_date' => 'required|date',
            'content_link' => 'required|url',
            'photo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genres' => 'required|array',
            'genres.*' => 'exists:categories,id',
            'writers' => 'required|array',
            'writers.*' => 'exists:workers,id',
            'cast' => 'required|array',
            'cast.*' => 'exists:workers,id',
            'directors' => 'exists:workers,id',
            'directors' => 'required|array',
            'producers' => 'exists:workers,id',
            'producers' => 'required|array',
            'cinematographers' => 'required|array',
            'cinematographers' => 'exists:workers,id',
            'editors' => 'exists:workers,id',
            'editors' => 'required|array',

            'costume_designers' => 'required|array',
            'costume_designers.*' => 'exists:workers,id',
            'description' => 'required|string'
        ]);






        $contentData = [
            'title' => $request->title,
            'release_date' => $request->release_date,
            'content_link' => $request->content_link,
            'description' => $request->description,
            'content_type' => 1,
        ];



        $content = Content::create($contentData);
        $genres = $request->genres;

        foreach ($genres as $genre) {
            $content->categories()->attach($genre);
        };


        $writers = $request->writers;

        foreach ($writers as $writer) {

            $writer = Worker::find($writer);
            $writer_profession_id = Profession::where('title', 'Writer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $writer->id,
                'profession_id' => $writer_profession_id,
            ]);
        };

        $cast = $request->cast;

        foreach ($cast as $actor) {

            $actor = Worker::find($actor);
            $actor_profession_id = Profession::where('title', 'Actor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $actor->id,
                'profession_id' =>  $actor_profession_id,
            ]);
        };

        $directors = $request->directors;
        $director_profession_id = Profession::where('title', 'Director')->value('id');
        foreach ($directors as $director) {

            $director = Worker::find($director);
            $director_profession_id = Profession::where('title', 'Director')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $director->id,
                'profession_id' => $director_profession_id,
            ]);
        };

        $producers = $request->producers;

        foreach ($producers as $producer) {

            $producer = Worker::find($producer);
            $producer_profession_id = Profession::where('title', 'Producer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $producer->id,
                'profession_id' => $producer_profession_id,
            ]);
        };



        $cinematographers = $request->cinematographers;

        foreach ($cinematographers as $cinematographer) {

            $cinematographer = Worker::find($cinematographer);
            $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $cinematographer->id,
                'profession_id' => $cinematographer_profession_id,
            ]);
        };




        $editors = $request->editors;

        foreach ($editors as $editor) {

            $editor = Worker::find($editor);
            $editor_profession_id = Profession::where('title', 'Editor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $editor->id,
                'profession_id' => $editor_profession_id,
            ]);
        };



        $costume_designers = $request->costume_designers;

        foreach ($costume_designers as $costume_designer) {

            $costume_designer = Worker::find($costume_designer);
            $costume_designer_profession_id = Profession::where('title', 'Costume Designer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $costume_designer->id,
                'profession_id' =>  $costume_designer_profession_id,
            ]);
        };

        return redirect()->route('movies.view-movies')->with('status', 'Movie added Successfully');

        // return response()->json([
        //     'success' => true,
        // ]);
    }


    public function destroy(string $id)
    {
        $content = Content::find($id);

        if (!$content) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Content not found'], 404);
        }

        $content->delete();
        return redirect()->route('movies.view-movies')->with('status', 'Movie deleted Successfully');
    }



    public function edit(string $id)
    {
        // Fetch the movie details based on $id
        $movie = Content::findOrFail($id); // Adjust this based on your Content model setup
        $actorProfessionId = 22;
        $movie = Content::with('workers.professions')->findOrFail($id);
        $workers = $movie->workers;  // Assuming $movie has a 'workers' relationship

        $filteredWorkers = $workers->filter(function ($worker) {

            return $worker->pivot->profession_id === 22;
        });

        $filteredWorkers = $filteredWorkers->pluck('id')->toArray();

        $filteredWorkers = [];

        foreach ($workers as  $worker) {

            switch ($worker->pivot->profession_id) {
                case 22:
                    $filteredWorkers['22'][] = $worker->id;
                    break;
                case 23:
                    $filteredWorkers['23'][] = $worker->id;
                    break;
                case 21:
                    $filteredWorkers['21'][] = $worker->id;
                    break;
                case 24:
                    $filteredWorkers['24'][] = $worker->id;
                    break;
                case 27:
                    $filteredWorkers['27'][] = $worker->id;
                    break;
                case 25:
                    $filteredWorkers['25'][] = $worker->id;
                    break;
                case 26:
                    $filteredWorkers['26'][] = $worker->id;
                    break;
                default:
                    echo "test";
            }
        }
        // if ($worker->pivot->profession_id === 22) {
        //     $filteredWorkers['22'][] = $worker->id;
        // } else if ($worker->pivot->profession_id === 23) {
        //     $filteredWorkers['23'][] = $worker->id;
        // }
        // dd($filteredWorkers);




        // $actorProfessionId = Profession::where('title', 'Actor')->first()->id;
        // $actors = $movie->workers->filter(function ($worker) use ($actorProfessionId) {
        //     return $worker->professions->contains('id', $actorProfessionId);
        // });
        // dd($actors);


        $categories = Category::all();
        $writers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'writer');
        })->get();

        $actors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'actor');
        })->get();
        $directors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'director');
        })->get();
        $producers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'producer');
        })->get();
        $cinematographers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'cinematographer');
        })->get();
        $editors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'editor');
        })->get();
        $costume_designers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Costume designer');
        })->get();

        // Pass the fetched data to the view
        return view('movies.edit-movie', compact('movie', 'categories', 'writers', 'actors', 'directors', 'producers', 'cinematographers', 'editors', 'costume_designers', 'filteredWorkers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'release_date' => 'required|date',
            'content_link' => 'nullable|string|max:255',
            'genres' => 'nullable|array',
            'writers' => 'nullable|array',
            'cast' => 'nullable|array',
            'director' => 'required|integer',
            'producer' => 'required|integer',
            'cinematographer' => 'required|integer',
            'editor' => 'required|integer',
            'costume_designers' => 'nullable|array',
            'description' => 'nullable|string',
        ]);

        // Find the movie instance to update
        $movie = Content::findOrFail($id);

        // Update basic movie details
        $movie->title = $validatedData['title'];
        $movie->release_date = $validatedData['release_date'];
        $movie->content_link = $validatedData['content_link'];
        $movie->description = $validatedData['description'];

        // Save the movie instance to update changes
        $movie->save();

        // Delete old records in content_workers_professions for this movie
        DB::table('content_workers_professions')->where('content_id', $movie->id)->delete();

        // Delete old records in category_content for this movie
        $movie->categories()->detach();

        // Insert new records for genres
        $genres = $request->genres;
        foreach ($genres as $genre) {
            $movie->categories()->attach($genre);
        }

        // Insert new records for writers
        $writers = $request->writers;
        $writer_profession_id = Profession::where('title', 'Writer')->value('id');
        foreach ($writers as $writerId) {
            DB::table('content_workers_professions')->insert([
                'content_id' => $movie->id,
                'worker_id' => $writerId,
                'profession_id' => $writer_profession_id,
            ]);
        }

        // Insert new records for actors (cast)
        $cast = $request->cast;
        $actor_profession_id = Profession::where('title', 'Actor')->value('id');
        foreach ($cast as $actorId) {
            DB::table('content_workers_professions')->insert([
                'content_id' => $movie->id,
                'worker_id' => $actorId,
                'profession_id' => $actor_profession_id,
            ]);
        }

        // Insert new record for director
        $directorId = $request->director;
        $director_profession_id = Profession::where('title', 'Director')->value('id');
        DB::table('content_workers_professions')->insert([
            'content_id' => $movie->id,
            'worker_id' => $directorId,
            'profession_id' => $director_profession_id,
        ]);

        // Insert new record for producer
        $producerId = $request->producer;
        $producer_profession_id = Profession::where('title', 'Producer')->value('id');
        DB::table('content_workers_professions')->insert([
            'content_id' => $movie->id,
            'worker_id' => $producerId,
            'profession_id' => $producer_profession_id,
        ]);

        // Insert new record for cinematographer
        $cinematographerId = $request->cinematographer;
        $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
        DB::table('content_workers_professions')->insert([
            'content_id' => $movie->id,
            'worker_id' => $cinematographerId,
            'profession_id' => $cinematographer_profession_id,
        ]);

        // Insert new record for editor
        $editorId = $request->editor;
        $editor_profession_id = Profession::where('title', 'Editor')->value('id');
        DB::table('content_workers_professions')->insert([
            'content_id' => $movie->id,
            'worker_id' => $editorId,
            'profession_id' => $editor_profession_id,
        ]);

        // Insert new records for costume designers
        $costume_designers = $request->costume_designers;
        $costume_designer_profession_id = Profession::where('title', 'Costume Designer')->value('id');
        foreach ($costume_designers as $costumeDesignerId) {
            DB::table('content_workers_professions')->insert([
                'content_id' => $movie->id,
                'worker_id' => $costumeDesignerId,
                'profession_id' => $costume_designer_profession_id,
            ]);
        }

        // Redirect back with a success message
        return redirect()->route('movies.view-movies')->with('success', 'Movie updated successfully.');
    }
}
