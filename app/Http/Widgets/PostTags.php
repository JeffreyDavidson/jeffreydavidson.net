<?php

namespace App\Http\Widgets;

use App\Models\PostTag;

class PostTags extends Widget
{
    /** @var $title */
    public $title = 'Tags';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function tags()
    {
        return PostTag::has('posts')->get()->sortByDesc('posts_count');
    }
}
