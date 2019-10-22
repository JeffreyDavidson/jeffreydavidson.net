<?php

namespace App\Http\Widgets;

use App\Models\Post;

class RecentPosts extends Widget
{
    /** @var $title */
    public $title = 'My Recent Posts';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function posts()
    {
        return Post::recent()->take(3)->get();
    }
}
