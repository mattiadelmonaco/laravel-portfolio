<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->name = $faker->sentence(4);
            $newProject->client = $faker->name();
            $newProject->period = $faker->dateTimeBetween("-20 week", "+2 week");
            $newProject->summary = $faker->paragraph(15);

            $newProject->save();
        }
    }
}
