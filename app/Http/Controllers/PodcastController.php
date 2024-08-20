<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Profession;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PodcastController extends Controller
{
    public function index()
    {

        $movies = Content::all()->where('content_type', 3);


        return view('podcasts.view-podcasts', compact('movies'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'podcast_title' => 'required|string|max:255',
            'podcast_release_date' => 'required|date',
            'podcast_content_link' => 'required|url',
            'podcast_photo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'podcast_genres' => 'required|array',
            'podcast_genres.*' => 'exists:categories,id',
            'podcast_writers' => 'required|array',
            'podcast_writers.*' => 'exists:workers,id',
            'podcast_hosts' => 'required|array',
            'podcast_hosts.*' => 'exists:workers,id',
            'podcast_graphic_designers' => 'required|array',
            'podcast_graphic_designers.*' => 'exists:workers,id',
            'podcast_producers' => 'required|array',
            'podcast_producers.*' => 'exists:workers,id',
            'podcast_cinematographers' => 'required|array',
            'podcast_cinematographers.*' => 'exists:workers,id',
            'podcast_editors' => 'required|array',
            'podcast_editors.*' => 'exists:workers,id',
            'podcast_description' => 'required|string',
            'podcast_costume_designers' => 'required|array',
            'podcast_costume_designers.*' => 'exists:workers,id',
        ]);
        $contentData = [
            'title' => $request->podcast_title,
            'release_date' => $request->podcast_release_date,
            'content_link' => $request->podcast_content_link,
            'description' => $request->podcast_description,
            'content_type' => 3,
            'photo_url' => 3, $request->podcast_photo_url,
        ];

        $content = Content::create($contentData);



        $genres = $request->podcast_genres;

        foreach ($genres as $genre) {
            $content->categories()->attach($genre);
        };

        $writers = $request->podcast_writers;

        foreach ($writers as $writer) {

            $writer = Worker::find($writer);
            $writer_profession_id = Profession::where('title', 'Writer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $writer->id,
                'profession_id' => $writer_profession_id,
            ]);
        };

        $hosts = $request->podcast_hosts;

        foreach ($hosts as $host) {

            $host = Worker::find($host);
            $host_profession_id = Profession::where('title', 'Host')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $host->id,
                'profession_id' =>  $host_profession_id,
            ]);
        };

        $graphic_designers = $request->podcast_graphic_designers;

        foreach ($graphic_designers as $graphic_designer) {

            $graphic_designer = Worker::find($graphic_designer);
            $graphic_designer_profession_id = Profession::where('title', 'Graphic Designer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $graphic_designer->id,
                'profession_id' =>  $graphic_designer_profession_id,
            ]);
        };

        $producers = $request->podcast_producers;

        foreach ($producers as $producer) {

            $producer = Worker::find($producer);
            $producer_profession_id = Profession::where('title', 'Producer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $producer->id,
                'profession_id' =>  $producer_profession_id,
            ]);
        };

        $cinematographers = $request->podcast_cinematographers;

        foreach ($cinematographers as $cinematographer) {

            $cinematographer = Worker::find($cinematographer);
            $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $cinematographer->id,
                'profession_id' =>  $cinematographer_profession_id,
            ]);
        };


        $editors = $request->podcast_editors;

        foreach ($editors as $editor) {

            $editor = Worker::find($editor);
            $editor_profession_id = Profession::where('title', 'Editor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $content->id,
                'worker_id' => $editor->id,
                'profession_id' =>  $editor_profession_id,
            ]);
        };





        return redirect()->route('podcasts.view-podcasts')->with('status', 'Podcast added Successfully');
    }

    public function destroy(string $id)
    {
        $content = Content::find($id);

        if (!$content) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Content not found'], 404);
        }

        $content->delete();
        return redirect()->route('podcasts.view-podcasts')->with('status', 'Podcast deleted Successfully');
    }


    public function edit(string $id)
    {
        // Fetch the movie details based on $id
        $podcast = Content::findOrFail($id);
        $podcast = Content::with('workers.professions')->findOrFail($id);
        $workers = $podcast->workers;  // Assuming $movie has a 'workers' relationship


        $filteredWorkers = [];

        foreach ($workers as  $worker) {

            switch ($worker->pivot->profession_id) {
                case 21:
                    $filteredWorkers['21'][] = $worker->id;
                    break;
                case 35:
                    $filteredWorkers['35'][] = $worker->id;
                    break;
                case 33:
                    $filteredWorkers['33'][] = $worker->id;
                    break;
                case 24:
                    $filteredWorkers['24'][] = $worker->id;
                    break;
                case 25:
                    $filteredWorkers['25'][] = $worker->id;
                    break;
                case 26:
                    $filteredWorkers['26'][] = $worker->id;
                    break;
                case 34:
                    $filteredWorkers['34'][] = $worker->id;
                    break;
                default:
                    echo "";
            }
        }




        $categories = Category::all();
        $writers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'writer');
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
        $hosts = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Host');
        })->get();
        $managers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Manager');
        })->get();

        $graphic_designers =  Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Graphic Designer');
        })->get();

        // Pass the fetched data to the view
        return view('podcasts.edit-postcasts', compact('podcast', 'categories', 'writers', 'hosts', 'producers', 'cinematographers', 'editors', 'graphic_designers', 'managers',  'filteredWorkers'));
    }



    public function update(Request $request, string $id)
    {

        $podcast = Content::findOrFail($id);

        // Update basic movie details
        $podcast->title = $request->title;
        $podcast->release_date = $request->release_date;
        $podcast->content_link = $request->content_link;
        $podcast->description = $request->description;

        // Save the movie instance to update changes
        $podcast->save();

        DB::table('content_workers_professions')->where('content_id', $podcast->id)->delete();
        $podcast->categories()->detach();
        $genres = $request->genres;

        foreach ($genres as $genre) {
            $podcast->categories()->attach($genre);
        };

        $writers = $request->writers;

        foreach ($writers as $writer) {

            $writer = Worker::find($writer);
            $writer_profession_id = Profession::where('title', 'Writer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $writer->id,
                'profession_id' => $writer_profession_id,
            ]);
        };

        $hosts = $request->hosts;

        foreach ($hosts as $host) {

            $host = Worker::find($host);
            $host_profession_id = Profession::where('title', 'Host')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $host->id,
                'profession_id' =>  $host_profession_id,
            ]);
        };

        $graphic_designers = $request->graphic_designers;

        foreach ($graphic_designers as $graphic_designer) {

            $graphic_designer = Worker::find($graphic_designer);
            $graphic_designer_profession_id = Profession::where('title', 'Graphic Designer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $graphic_designer->id,
                'profession_id' =>  $graphic_designer_profession_id,
            ]);
        };

        $producers = $request->producers;

        foreach ($producers as $producer) {

            $producer = Worker::find($producer);
            $producer_profession_id = Profession::where('title', 'Producer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $producer->id,
                'profession_id' =>  $producer_profession_id,
            ]);
        };

        $cinematographers = $request->cinematographers;

        foreach ($cinematographers as $cinematographer) {

            $cinematographer = Worker::find($cinematographer);
            $cinematographer_profession_id = Profession::where('title', 'Cinematographer')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $cinematographer->id,
                'profession_id' =>  $cinematographer_profession_id,
            ]);
        };


        $editors = $request->editors;

        foreach ($editors as $editor) {

            $editor = Worker::find($editor);
            $editor_profession_id = Profession::where('title', 'Editor')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $editor->id,
                'profession_id' =>  $editor_profession_id,
            ]);
        };

        $managers = $request->managers;

        foreach ($managers as $manager) {

            $manager = Worker::find($manager);
            $manager_profession_id = Profession::where('title', 'Manager')->value('id');
            DB::table('content_workers_professions')->insert([
                'content_id' => $podcast->id,
                'worker_id' => $manager->id,
                'profession_id' =>  $manager_profession_id,
            ]);
        };



        return redirect()->route('podcasts.view-podcasts')->with('status', 'Podcast added Successfully');
    }
}
