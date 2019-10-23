<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;

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
