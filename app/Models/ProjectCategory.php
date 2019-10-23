<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $model->slug = Str::slug($model->name);
        });
    }

    /**
     * The projects that belong to the project category.
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category');
    }
}
