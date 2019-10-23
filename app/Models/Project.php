<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ProjectAttachment;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model)
        {
            $model->slug = Str::slug($model->name);
        });
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['completed_at'];

    /**
     * Get the attachments for the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments()
    {
        return $this->hasMany(ProjectAttachment::class);
    }

    /**
     * Get the thumbnail attachment associated with the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumbnail()
    {
        return $this->hasOne(ProjectAttachment::class)->where('is_thumbnail', true);
    }

    /**
     * Get the slider image associated with the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function slider()
    {
        return $this->hasOne(ProjectAttachment::class)->where('is_slider', true);
    }

    /**
     * Get the attachments that are not slider images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->attachments()->where('is_slider', false)->orderByDesc('is_thumbnail');
    }

    /**
     * The categories that belong to the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'project_category');
    }

    /**
     * The skills that belong to the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function skills()
    {
        return $this->belongsToMany(ProjectSkill::class, 'project_skill', 'project_id', 'skill_id');
    }

    /**
     * Get the client that owns the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(ProjectClient::class);
    }

    /**
     * Get the previous project of the current project.
     *
     * @return self|null
     */
    public function previousProject(): ?self
    {
        return (new self())
            ->where('id', '<', $this->id)
            ->latest()
            ->first();
    }

    /**
     * Get the next project of the current project.
     *
     * @return self|null
     */
    public function nextProject(): ?self
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
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
