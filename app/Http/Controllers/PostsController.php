<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::when($request->has('searchQuery'), function ($query) use ($request) {
            $query->where('title', 'like', '%' . $request->input('searchQuery') . '%')
                ->orWhere('body', 'like', '%' . $request->input('searchQuery') . '%');
        })->paginate(5);

        return view('pages.blog', compact('posts'));
    }

    /**
     * Show the given post.
     *
     * @param  App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('pages.post', compact('post'))
                ->with('previousPost', $post->previousPost())
                ->with('nextPost', $post->nextPost());;
    }
}
