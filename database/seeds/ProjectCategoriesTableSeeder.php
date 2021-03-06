<?php

use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProjectCategory::class, 5)->create();
    }
}
