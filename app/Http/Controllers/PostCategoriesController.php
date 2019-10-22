<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Database\Eloquent\Builder;

class PostCategoriesController extends Controller
{
    /**
     * 
     */
    public function show(PostCategory $category)
    {
        $posts = Post::whereHas('categories', function (Builder $query) use ($category) {
            $query->where('category_id', '=', $category->id);
        })->paginate(5);

        return view('pages.blog', compact('posts'));
    }
}
