<?php

use App\Models\ProjectSkill;
use Illuminate\Database\Seeder;

class ProjectSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProjectSkill::class, 10)->create();
    }
}
