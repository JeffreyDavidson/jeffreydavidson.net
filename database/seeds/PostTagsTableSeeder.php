<?php

use App\Models\PostTag;
use Illuminate\Database\Seeder;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostTag::class, 10)->create();
    }
}
