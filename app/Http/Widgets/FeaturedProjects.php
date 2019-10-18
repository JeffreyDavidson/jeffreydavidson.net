<?php

namespace App\Http\Widgets;

use App\Models\Project;

class FeaturedProjects extends Widget
{
    /** @var $title */
    public $title = 'My Featured Projects';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function featuredProjects()
    {
        return Project::featured()->get();
    }
}
