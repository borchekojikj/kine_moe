<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professions = [
            ['title' => 'Doctor'],
            ['title' => 'Engineer'],
            ['title' => 'Teacher'],
            ['title' => 'Nurse'],
            ['title' => 'Lawyer'],
            ['title' => 'Accountant'],
            ['title' => 'Architect'],
            ['title' => 'Pharmacist'],
            ['title' => 'Dentist'],
            ['title' => 'Veterinarian'],
            ['title' => 'Scientist'],
            ['title' => 'Journalist'],
            ['title' => 'Pilot'],
            ['title' => 'Chef'],
            ['title' => 'Police Officer'],
            ['title' => 'Firefighter'],
            ['title' => 'Electrician'],
            ['title' => 'Plumber'],
            ['title' => 'Mechanic'],
            ['title' => 'Artist'],
        ];

        DB::table('professions')->insert($professions);
    }
}
