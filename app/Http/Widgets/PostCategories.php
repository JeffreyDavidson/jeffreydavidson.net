<?php

namespace App\Http\Widgets;

use App\Models\PostCategory;

class PostCategories extends Widget
{
    /** @var $title */
    public $title = 'Categories';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function categories()
    {
        return PostCategory::has('posts')->get()->sortByDesc('posts_count');
    }
}
