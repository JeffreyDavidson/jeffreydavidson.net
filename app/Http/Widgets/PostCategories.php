<?php

namespace App\Http\Widgets;

use App\Models\PostCategory;

class PostCategories extends Widget
{
    /** @var $title */
    public $title = 'Categories';

    /**
     * Retrieve a collection of post categories.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function categories()
    {
        return PostCategory::has('posts')->get()->sortByDesc('posts_count');
    }
}
