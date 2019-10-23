<?php

namespace App\Http\Widgets;

use App\Models\Post;

class LatestPosts extends Widget
{
    /** @var $title */
    public $title = 'Latest Posts';

    /**
     * Retrieve a collection of posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function posts()
    {
        return Post::latest('published_at')->take(5)->get();
    }
}
