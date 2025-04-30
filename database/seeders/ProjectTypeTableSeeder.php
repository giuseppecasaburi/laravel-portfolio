<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $types = Type::all();

        foreach($projects as $project) {
            $project->types()->attach(
                $types->random(rand(1, 5))->pluck("id")->toArray()
            );
        }
    }
}