<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));

        // Define the number of records you want to create
        $numberOfDiscussions = 10; // Adjust as needed

        for ($i = 0; $i < $numberOfDiscussions; $i++) {
            $discussionData = [
                'title' => $faker->sentence(2),
                'description' => $faker->overview,
                'user_id' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
                'content_id' => DB::table('contents')->select('id')->inRandomOrder()->first()->id,
                'created_at' => $this->generateRandomPastDate(),
                'updated_at' => Carbon::now(),

            ];

            DB::table('discussions')->insert($discussionData);
        }
    }

    private function generateRandomPastDate()
    {
        $now = Carbon::now();
        $randomDays = mt_rand(1, 7); // Generate a random number of days between 1 and 30
        $pastDate = $now->subDays($randomDays); // Subtract the random number of days from the current date
        return $pastDate->toDateString(); // Format the date as YYYY-MM-DD
    }
}
