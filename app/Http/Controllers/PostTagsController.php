<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;

class PostTagsController extends Controller
{
    /**
     * Show the given post tag posts.
     *
     * @param  App\Models\PostTag $tag
     * @return \Illuminate\Http\Response
     */
    public function show(PostTag $tag)
    {
        $posts = Post::hasTag($tag)->paginate(5);

        return view('pages.blog', compact('posts'));
    }
}
