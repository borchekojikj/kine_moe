<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Profession;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {

        $movies = Content::all()->where('content_type', 2);


        return view('series.view-series', compact('movies'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'series_title' => 'required|string|max:255',
            'series_release_date' => 'required|date',
            'series_content_link' => 'required|url',
            'series_photo_url' => 'required|string|max:255',
            'series_genres' => 'required|array',
            'series_genres.*' => 'exists:categories,id',
            'series_writers' => 'required|array',
            'series_writers.*' => 'exists:workers,id',
            'series_cast' => 'required|array',
            'series_cast.*' => 'exists:workers,id',

            'series_directors' => 'required|array',
            'series_directors.*' => 'exists:workers,id',
            'series_producers' => 'required|exists:workers,id',
            'series_cinematographers' => 'required|exists:workers,id',
            'series_editors' => 'required|exists:workers,id',
            'series_costume_designers' => 'required|array',
            'series_costume_designers.*' => 'exists:workers,id',
            'series_description' => 'required|string'
        ]);

        $contentData = [
            'title' => $request->series_title,
            'release_date' => $request->series_release_date,
            'content_link' => $request->series_content_link,
            'description' => $request->series_description,
            'photo_url' => $request->series_photo_url,
            'content_type' => 2,
        ];

        $content = Content::create($contentData);
        $genres = $request->series_genres;

        foreach ($genres as $genre) {
            $content->categories()->attach($genre);
        };

        $writers = $request->series_writers;

        foreach ($writers as $writer) {

            $writer = Worker::find($writer);
            $writer_profession_id = Profession::where('title', 'Writer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $writer->id,
                'profession_id' => $writer_profession_id,
            ]);
        };

        $cast = $request->series_cast;

        foreach ($cast as $actor) {

            $actor = Worker::find($actor);
            $actor_profession_id = Profession::where('title', 'Actor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $actor->id,
                'profession_id' =>  $actor_profession_id,
            ]);
        };

        // $director = Worker::find($request->series_director);

        // DB::table('content_workers_professions')->insert([
        //     'content_id' => $content->id,
        //     'worker_id' => $director->id,
        //     'profession_id' =>  $director_profession_id,
        // ]);

        $directors = $request->series_directors;
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
        // $producer = Worker::find($request->series_producer);
        // $producer_profession_id = Profession::where('title', 'Producer')->value('id');
        // DB::table('content_workers_professions')->insert([
        //     'content_id' => $content->id,
        //     'worker_id' => $producer->id,
        //     'profession_id' =>  $producer_profession_id,
        // ]);

        $producers = $request->series_producers;

        foreach ($producers as $producer) {

            $producer = Worker::find($producer);
            $producer_profession_id = Profession::where('title', 'Producer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $producer->id,
                'profession_id' => $producer_profession_id,
            ]);
        };


        // $cinematographer = Worker::find($request->series_cinematographer);
        // $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
        // DB::table('content_workers_professions')->insert([
        //     'content_id' => $content->id,
        //     'worker_id' => $cinematographer->id,
        //     'profession_id' => $cinematographer_profession_id,
        // ]);


        $cinematographers = $request->series_cinematographers;

        foreach ($cinematographers as $cinematographer) {

            $cinematographer = Worker::find($cinematographer);
            $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $cinematographer->id,
                'profession_id' => $cinematographer_profession_id,
            ]);
        };


        // $editor = Worker::find($request->series_editor);
        // $editor_profession_id = Profession::where('title', 'Editor')->value('id');
        // DB::table('content_workers_professions')->insert([
        //     'content_id' => $content->id,
        //     'worker_id' => $editor->id,
        //     'profession_id' =>  $editor_profession_id,
        // ]);


        $editors = $request->series_editors;

        foreach ($editors as $editor) {

            $editor = Worker::find($editor);
            $editor_profession_id = Profession::where('title', 'Editor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $editor->id,
                'profession_id' => $editor_profession_id,
            ]);
        };

        $costume_designers = $request->series_costume_designers;

        foreach ($costume_designers as $costume_designer) {

            $costume_designer = Worker::find($costume_designer);
            $costume_designer_profession_id = Profession::where('title', 'Costume Designer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $costume_designer->id,
                'profession_id' =>  $costume_designer_profession_id,
            ]);
        };

        return redirect()->route('series.view-series')->with('status', 'Series added Successfully');
    }

    public function destroy(string $id)
    {
        $content = Content::find($id);

        if (!$content) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Content not found'], 404);
        }

        $content->delete();
        return redirect()->route('series.view-series')->with('status', 'Series deleted Successfully');
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
        return view('series.edit-series', compact('movie', 'categories', 'writers', 'actors', 'directors', 'producers', 'cinematographers', 'editors', 'costume_designers', 'filteredWorkers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => '',
            'release_date' => '',
            'content_link' => '',
            'genres' => '',
            'writers' => '',
            'cast' => '',
            'director' => '',
            'producer' => '',
            'cinematographer' => '',
            'editors' => '',
            'costume_designers' => '',
            'description' => '',
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
        $editors = $request->editors;
        $editor_profession_id = Profession::where('title', 'Editor')->value('id');
        foreach ($editors as $editor) {
            DB::table('content_workers_professions')->insert([
                'content_id' => $movie->id,
                'worker_id' => $editor,
                'profession_id' => $editor_profession_id,
            ]);
        }

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
        return redirect()->route('series.view-series')->with('success', 'Serie updated successfully.');
    }
}
