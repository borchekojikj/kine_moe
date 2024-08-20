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


class PodcastSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));
        DB::transaction(function () use ($faker) {
            for ($i = 0; $i < 20; $i++) {
                $contentData = [
                    'title' => $faker->sentence(2),
                    'release_date' => $this->generateRandomFutureDate(),
                    'content_link' => 'http://example.com/sample-movie',
                    'description' => $faker->overview,
                    'content_type' => 3, // assuming 1 is for movie
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
                $hostProfessionId = Profession::where('title', 'Host')->value('id');
                $hosts = Worker::whereHas('professions', function ($query) use ($hostProfessionId) {
                    $query->where('professions.id', $hostProfessionId);
                })->inRandomOrder()->limit(rand(1, 3))->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $hosts, 'Host');

                // Select workers with the profession 'Director'
                $graphicDesignerProfessionId = Profession::where('title', 'Graphic Designer')->value('id');
                $graphicDesigners = Worker::whereHas('professions', function ($query) use ($graphicDesignerProfessionId) {
                    $query->where('professions.id', $graphicDesignerProfessionId);
                })->inRandomOrder()->limit(1)->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $graphicDesigners, 'Graphic Designer');

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
                $managerProfessionId = Profession::where('title', 'Manager')->value('id');
                $managers = Worker::whereHas('professions', function ($query) use ($managerProfessionId) {
                    $query->where('professions.id', $managerProfessionId);
                })->inRandomOrder()->limit(rand(1, 2))->pluck('workers.id')->toArray();
                $this->attachWorkersToContent($content->id, $managers, 'Manager');
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
