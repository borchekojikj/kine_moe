<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EngagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\TvShow($faker));

        // Define the number of records you want to create
        $numberOfEngagements = 350; // Adjust as needed

        for ($i = 0; $i < $numberOfEngagements; $i++) {
            $engagementData = [
                'user_reaction' => $faker->randomElement([0, 1]),
                'user_id' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
                'discussion_id' => DB::table('discussions')->select('id')->inRandomOrder()->first()->id,
                'created_at' => $this->generateRandomPastDate(),

            ];

            DB::table('engagements')->insert($engagementData);
        }
    }


    private function generateRandomPastDate()
    {
        $now = Carbon::now();
        $randomDays = mt_rand(1, 30); // Generate a random number of days between 1 and 30
        $pastDate = $now->subDays($randomDays); // Subtract the random number of days from the current date
        return $pastDate->toDateString(); // Format the date as YYYY-MM-DD
    }
}
