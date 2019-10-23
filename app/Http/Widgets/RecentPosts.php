<?php

namespace App\Http\Widgets;

use App\Models\Post;

class RecentPosts extends Widget
{
    /** @var $title */
    public $title = 'My Recent Posts';

    /**
     * Retrieve a collection of post.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function posts()
    {
        return Post::recent()->take(3)->get();
    }
}
