<?php

use App\Models\Project;
use App\Models\ProjectSkill;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;
use App\Models\ProjectAttachment;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Project::class, 12)
            ->create()
            ->each(function ($project) {
                $project->categories()->attach(ProjectCategory::inRandomOrder()->first());
                $project->skills()->attach(ProjectSkill::inRandomOrder()->first());
                $project->thumbnail()->save(factory(ProjectAttachment::class)->states('thumbnail')->make());
                $project->attachments()->save(factory(ProjectAttachment::class)->make());
            });

        factory(Project::class, 5)
            ->states('featured')
            ->create()
            ->each(function ($project) {
                $project->categories()->attach(ProjectCategory::inRandomOrder()->first());
                $project->skills()->attach(ProjectSkill::inRandomOrder()->first());
                $project->slider()->save(factory(ProjectAttachment::class)->states('slider')->make());
                $project->thumbnail()->save(factory(ProjectAttachment::class)->states('thumbnail')->make());
                $project->attachments()->save(factory(ProjectAttachment::class)->make());
            });

        factory(Project::class, 6)
            ->states('withClient')
            ->create()
            ->each(function ($project) {
                $project->categories()->attach(ProjectCategory::inRandomOrder()->first());
                $project->skills()->attach(ProjectSkill::inRandomOrder()->first());
                $project->thumbnail()->save(factory(ProjectAttachment::class)->states('thumbnail')->make());
                $project->attachments()->save(factory(ProjectAttachment::class)->make());
            });
    }
}
