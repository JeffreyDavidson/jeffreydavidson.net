<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $startDate = new Carbon('2000-01-01');
        $weeksSinceStarted  = $startDate->diffInWeeks(now());
        $linesOfCodeWritten = 150 * 5 * $weeksSinceStarted;
        $sleepHoursLost = 2.5 * 5 * $weeksSinceStarted;
        $coffeeCups = 3 * 5 * $weeksSinceStarted;

        return view('pages.home', compact('featuredProjects', 'linesOfCodeWritten', 'sleepHoursLost', 'coffeeCups'));
    }
}
