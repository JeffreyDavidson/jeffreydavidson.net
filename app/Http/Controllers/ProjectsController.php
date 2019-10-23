<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the projects.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('categories')->get();
        $projectCategories = ProjectCategory::has('projects')->get();

        return view('pages.portfolio', compact('projects', 'projectCategories'));
    }

    /**
     * Show the given project.
     *
     * @param  App\Models\PostCategory $category
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('pages.project', compact('project'))
                ->with('previousProject', $project->previousProject())
                ->with('nextProject', $project->nextProject());
    }
}
