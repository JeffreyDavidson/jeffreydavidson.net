<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** We need to know if there are any projects that have been created.
         *  If there are then we will need to display the links to
         *  the porfolio page throughout the site.
         */
        View::composer('*', function ($view) {
            $view->with('projectsCount', Project::count());
            $view->with('postsCount', Post::count());
        });
    }
}
