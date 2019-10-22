<?php

use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostComment;
use App\Models\PostCategory;
use App\Models\PostAttachment;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 30)
            ->create()
            ->each(function ($post) {
                $post->categories()->attach(
                    PostCategory::inRandomOrder()->first()
                );
                $post->tags()->attach(
                        PostTag::inRandomOrder()->first()
                );
                $post->thumbnail()->save(
                    factory(PostAttachment::class)->make(['is_thumbnail' => true])
                );
                $post->attachments()->createMany(
                    factory(PostAttachment::class, 3)->make()->toArray()
                );
                $post->comments()->createMany(
                    factory(PostComment::class, 3)->make()->toArray()
                );
            });
    }
}
