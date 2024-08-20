<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Culture;
use App\Models\Interest;
use App\Models\Privacy;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */




    public function run(): void
    {
        $faker = Faker::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Person($faker));


        $user = User::create([
            'email' => $faker->email,
            'password' => Hash::make('password'),
            'username' => $faker->userName,
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'gender' => $faker->randomElement(['male', 'female']),
            'age' => mt_rand(18, 65),
            'status' => 1,
            'privacy' => DB::table('privacy_options')->select('id')->inRandomOrder()->first()->id,
            'role' => DB::table('roles')->select('id')->where('title', '!=', 'admin')->inRandomOrder()->first()->id,
            'sub_plan' => DB::table('subscriptions')->select('id')->inRandomOrder()->first()->id,
        ]);

        $genres = Category::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
        $user->categories()->attach($genres);

        $cultures = Culture::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
        $user->cultures()->attach($cultures);

        $interests = Interest::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
        $user->interests()->attach($interests);

        $userInfos = [
            'description' => $faker->text,
            'user_id' => $user->id,
            'notifications' => DB::table('notifications')->select('id')->inRandomOrder()->first()->id,
            'explore_style' => $faker->randomElement(['Regular', 'Show me']),
        ];

        UserInfo::insert($userInfos);
    }
}
