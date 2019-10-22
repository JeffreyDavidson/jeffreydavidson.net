<?php

namespace App\Http\Widgets;

use App\Models\Post;

class LatestPosts extends Widget
{
    /** @var $title */
    public $title = 'Latest Posts';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function posts()
    {
        return Post::latest('published_at')->take(5)->get();
    }
}
