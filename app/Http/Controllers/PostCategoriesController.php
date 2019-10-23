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
        $posts = Post::hasCategory($category)->paginate(5);

        return view('pages.blog', compact('posts'));
    }
}
