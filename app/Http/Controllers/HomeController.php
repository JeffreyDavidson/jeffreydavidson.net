<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $featuredProjects = Project::latest('completed_at')->take(5)->get();
        $testimonials = Testimonial::all();

        return view('pages.home', compact('featuredProjects', 'testimonials'));
    }
}
