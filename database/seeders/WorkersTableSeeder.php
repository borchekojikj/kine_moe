<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));

        for ($i = 0; $i < 20; $i++) {
            $workerData = [
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'bio' => $faker->text,
            ];

            $worker = Worker::create($workerData);

            $professions = Profession::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
            $worker->professions()->attach($professions);
        }
    }
}
