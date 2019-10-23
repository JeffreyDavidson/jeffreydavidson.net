<?php

namespace App\Http\Widgets;

use App\Models\Project;

class FeaturedProjects extends Widget
{
    /** @var $title */
    public $title = 'My Featured Projects';

    /**
     * Retrieve a collection of featured projects.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function featuredProjects()
    {
        return Project::featured()->get();
    }
}
