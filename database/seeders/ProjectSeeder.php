<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $project = new Project();
            $project->title = $faker->sentence(4);
            $project->slug = Str::slug($project->title, '-');
            $project->description = $faker->paragraphs(asText: true);
            $project->image = $faker->imageUrl(category: 'Posts', format: 'jpg');
            $project->link_ghit = $faker->url();
            $project->link_site = $faker->url();
            $project->save();
        }
    }
}
