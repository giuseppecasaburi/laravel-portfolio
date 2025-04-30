<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->name = $faker->name;
            $newProject->client = $faker->name;
            $newProject->project_start = $faker->dateTimeThisYear();
            $newProject->project_end = $faker->dateTimeThisYear("+1 months");
            $newProject->description = $faker->paragraph();
            
            $newProject->save();
        }
    }
}
