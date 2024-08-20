<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Content;
use App\Models\Category;
use App\Models\Worker;
use App\Models\Profession;
use Carbon\Carbon;
use Faker\Factory as Faker;


class SeriesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));
        DB::transaction(function () use ($faker) {
            for ($i = 0; $i < 20; $i++) {
                $contentData = [
                    'title' => $faker->tvShow,
                    'release_date' => $this->generateRandomFutureDate(),
                    'content_link' => 'http://example.com/sample-movie',
                    'description' => $faker->overview,
                    'content_type' => 2, // assuming 1 is for movie
                ];

                $content = Content::create($contentData);

                // Randomly select 2-4 categories
                $genres = Category::inRandomOrder()->limit(rand(2, 4))->pluck('id')->toArray();
                $content->categories()->attach($genres);

                // Select workers with the profession 'Writer'
                $writersProfessionId = Profession::where('title', 'Writer')->value('id');
                $writers = Worker::whereHas('professions', function ($query) use ($writersProfessionId) {
                    $query->where('professions.id', $writersProfessionId);
                })->inRandomOrder()->limit(2)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $writers, 'Writer');

                // Select workers with the profession 'Actor'
                $actorProfessionId = Profession::where('title', 'Actor')->value('id');
                $cast = Worker::whereHas('professions', function ($query) use ($actorProfessionId) {
                    $query->where('professions.id', $actorProfessionId);
                })->inRandomOrder()->limit(rand(2, 4))->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $cast, 'Actor');

                // Select workers with the profession 'Director'
                $directorProfessionId = Profession::where('title', 'Director')->value('id');
                $directors = Worker::whereHas('professions', function ($query) use ($directorProfessionId) {
                    $query->where('professions.id', $directorProfessionId);
                })->inRandomOrder()->limit(1)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $directors, 'Director');

                // Select workers with the profession 'Producer'
                $producerProfessionId = Profession::where('title', 'Producer')->value('id');
                $producers = Worker::whereHas('professions', function ($query) use ($producerProfessionId) {
                    $query->where('professions.id', $producerProfessionId);
                })->inRandomOrder()->limit(1)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $producers, 'Producer');

                // Select workers with the profession 'Cinematographer'
                $cinematographerProfessionId = Profession::where('title', 'Cinematographer')->value('id');
                $cinematographers = Worker::whereHas('professions', function ($query) use ($cinematographerProfessionId) {
                    $query->where('professions.id', $cinematographerProfessionId);
                })->inRandomOrder()->limit(1)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $cinematographers, 'Cinematographer');

                // Select workers with the profession 'Editor'
                $editorProfessionId = Profession::where('title', 'Editor')->value('id');
                $editors = Worker::whereHas('professions', function ($query) use ($editorProfessionId) {
                    $query->where('professions.id', $editorProfessionId);
                })->inRandomOrder()->limit(1)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $editors, 'Editor');

                // Select workers with the profession 'Costume Designer'
                $costumeDesignersProfessionId = Profession::where('title', 'Costume Designer')->value('id');
                $costumeDesigners = Worker::whereHas('professions', function ($query) use ($costumeDesignersProfessionId) {
                    $query->where('professions.id', $costumeDesignersProfessionId);
                })->inRandomOrder()->limit(rand(2, 4))->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $costumeDesigners, 'Costume Designer');
            }
        });
    }

    private function generateRandomFutureDate()
    {
        $now = Carbon::now();
        $randomDays = mt_rand(1, 30);
        $futureDate = $now->addDays($randomDays);
        return $futureDate->toDateString(); // Format the date as YYYY-MM-DD
    }

    private function attachWorkersToContent($contentId, $workerIds, $professionTitle)
    {
        $professionId = Profession::where('title', $professionTitle)->value('id');

        $workerData = array_map(function ($workerId) use ($contentId, $professionId) {
            return [
                'content_id' => $contentId,
                'worker_id' => $workerId,
                'profession_id' => $professionId,
            ];
        }, $workerIds);

        DB::table('content_workers_professions')->insert($workerData);
    }
}
