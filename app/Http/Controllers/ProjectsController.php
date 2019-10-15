<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $projects = Project::with('categories')->get();
        $projectCategories = ProjectCategory::has('projects')->get();

        return view('pages.portfolio', compact('projects', 'projectCategories'));
    }

    public function show(Project $project)
    {
        return view('pages.project', compact('project'))
                ->with('previousProject', $project->previousProject())
                ->with('nextProject', $project->nextProject());
    }
}
