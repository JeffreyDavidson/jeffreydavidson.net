<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $model->slug = Str::slug($model->name);
        });
    }

    /**
     * Get all of the posts that are assigned this category.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category');
    }
}
