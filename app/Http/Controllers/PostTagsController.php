<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Database\Eloquent\Builder;

class PostTagsController extends Controller
{
    /**
     * 
     */
    public function show(PostTag $tag)
    {
        $posts = Post::hasTag($tag)->paginate(5);

        return view('pages.blog', compact('posts'));
    }
}
