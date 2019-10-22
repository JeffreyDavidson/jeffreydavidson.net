<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectCategoriesTableSeeder::class);
        $this->call(ProjectSkillsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostTagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
    }
}
