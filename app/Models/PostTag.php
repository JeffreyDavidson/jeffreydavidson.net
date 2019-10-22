<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    protected $guarded = [];

    protected $appends = ['posts_count'];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function($model)
        {
            $model->slug = Str::slug($model->name);
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }

    public function getPostsCountAttribute()
    {
        return $this->posts->count();
    }
}
