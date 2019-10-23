<?php

namespace App\Http\Widgets;

use App\Models\PostTag;
use App\Models\PostCategory;

class BlogFilters extends Widget
{
    /**
     * Retrieve a collection of post tags.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function tags()
    {
        return PostTag::all();
    }

    /**
     * Retrieve a collection of post categories.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function categories()
    {
        return PostCategory::all();
    }
}
