<?php

namespace App\Http\Widgets;

use App\Models\PostTag;
use App\Models\PostCategory;

class BlogFilters extends Widget
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function tags()
    {
        return PostTag::all();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function categories()
    {
        return PostCategory::all();
    }
}
