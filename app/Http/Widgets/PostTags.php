<?php

namespace App\Http\Widgets;

use App\Models\PostTag;

class PostTags extends Widget
{
    /** @var $title */
    public $title = 'Tags';

    /**
     * Retrieve a collection of post tags.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tags()
    {
        return PostTag::has('posts')->get()->sortByDesc('posts_count');
    }
}
