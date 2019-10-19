<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $appends = ['comments_count'];

    protected $dates = ['published_at'];

    public static function boot()
    {
        parent::boot();
        
        static::creating(function($model)
        {
            $model->slug = Str::slug($model->title);
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

    /**
     * 
     */
    public function tags()
    {
        return $this->belongsToMany(PostTag::class, 'post_tag', 'post_id', 'tag_id');
    }

    /**
     * Get all of the attachmnets for the post.
     */
    public function attachments()
    {
        return $this->hasMany(PostAttachment::class);
    }

    /**
     * Get all of the thumbnail attachment for the post.
     */
    public function thumbnail()
    {
        return $this->hasOne(PostAttachment::class)->where('is_thumbnail', true);
    }

    /**
     * Get all of the attachmnets for the post.
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'post_category', 'post_id', 'category_id');
    }

    /**
     * Get all of the comments for the post.
     */
    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments->count();
    }

    public function previousPost() : ?self
    {
        return (new self())
            ->where('id', '<', $this->id)
            ->latest()
            ->first();
    }

    public function nextPost() : ?self
    {
        return (new self())
            ->where('id', '>', $this->id)
            ->latest()
            ->first();
    }
}