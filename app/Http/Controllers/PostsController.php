<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * 
     */
    public function index(Request $request)
    {
        if ($request->input('searchQuery'))
        {
            $posts = Post::where('title', 'like', '%'.$request->input('searchQuery').'%')
                        ->orWhere('body', 'like', '%'.$request->input('searchQuery').'%')
                        ->paginate();
        } else {
            $posts = Post::paginate(5);
        }

        return view('pages.blog', compact('posts'));
    }

    /**
     * 
     */
    public function show(Post $post)
    {
        return view('pages.post', compact('post'))
                ->with('previousPost', $post->previousPost())
                ->with('nextPost', $post->nextPost());;
    }
}
