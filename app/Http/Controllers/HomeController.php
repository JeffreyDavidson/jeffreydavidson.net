<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $featuredProjects = Project::where('is_featured', true)->get();

        return view('pages.home', compact('featuredProjects'));
    }
}
