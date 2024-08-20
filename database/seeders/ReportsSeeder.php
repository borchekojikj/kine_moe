<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();
        $number_of_reports = 20;
        // Create 10 sample reports
        for ($i = 0; $i < $number_of_reports; $i++) {
            // Select random users for report_owner and reported_owner


            // Insert a new report
            DB::table('reports')->insert([
                'comment' => $faker->sentence(5),
                'report_owner' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
                'reported_user' => DB::table('users')->select('id')->inRandomOrder()->first()->id,
                'created_at' => $this->generateRandomPastDate(),
                'updated_at' => now(),
            ]);
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
