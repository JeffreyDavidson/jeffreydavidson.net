<?php

namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['comments_count'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

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
     * The tags that belong to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(PostTag::class, 'post_tag', 'post_id', 'tag_id');
    }

    /**
     * Get the attachments for the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments()
    {
        return $this->hasMany(PostAttachment::class);
    }

    /**
     * Get the thumbnail record associated with the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumbnail()
    {
        return $this->hasOne(PostAttachment::class)->where('is_thumbnail', true);
    }

    /**
     * The categories that belong to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(PostCategory::class, 'post_category', 'post_id', 'category_id');
    }

    /**
     * Get the comments for the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    /**
     * Get the count of comments for the post.
     *
     * @return integer
     */
    public function getCommentsCountAttribute()
    {
        return $this->comments->count();
    }

    /**
     * Get the previous post of the current post.
     *
     * @return self|null
     */
    public function previousPost() : ?self
    {
        return (new self())
            ->where('id', '<', $this->id)
            ->latest()
            ->first();
    }

    /**
     * Get the next post of the current post.
     *
     * @return self|null
     */
    public function nextPost() : ?self
    {
        return (new self())
            ->where('id', '>', $this->id)
            ->latest()
            ->first();
    }

    /**
     * Scope a query to only include featured projects.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecent($query)
    {
        return $query->orderByDesc('published_at');
    }

    /**
     * Scope a query to only include posts in a specific category.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHasCategory($query, $category)
    {
        return $query->whereHas('categories', function (Builder $query) use ($category) {
            $query->where('category_id', '=', $category->id);
        });
    }

    /**
     * Scope a query to only include posts with a specific tag.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHasTag($query, $tag)
    {
        return $query->whereHas('tags', function (Builder $query) use ($tag) {
            $query->where('tag_id', '=', $tag->id);
        });
    }
}
