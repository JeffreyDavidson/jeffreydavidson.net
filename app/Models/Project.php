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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    protected $dates = ['completed_at'];

    /**
     * Get all of the attachmnets for the project.
     */
    public function attachments()
    {
        return $this->hasMany(ProjectAttachment::class);
    }

    /**
     * Get the thumbnail attachment for the project.
     */
    public function thumbnail()
    {
        return $this->hasOne(ProjectAttachment::class)->where('is_thumbnail', true);
    }

    /**
     * Get the slider image for the project.
     */
    public function slider()
    {
        return $this->hasOne(ProjectAttachment::class)->where('is_slider', true);
    }

    /**
     * Get all of the attachment images that is not the slider image.
     */
    public function images()
    {
        return $this->attachments()->where('is_slider', false)->orderByDesc('is_thumbnail');
    }

    /**
     * Get all of the categories for the project.
     */
    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'project_category');
    }

    /**
     * Get all of the attachmnets for the project.
     */
    public function skills()
    {
        return $this->belongsToMany(ProjectSkill::class, 'project_skill', 'project_id', 'skill_id');
    }

    public function previousProject(): ?self
    {
        return (new self())
            ->where('id', '<', $this->id)
            ->latest()
            ->first();
    }

    public function nextProject(): ?self
    {
        return (new self())
            ->where('id', '>', $this->id)
            ->latest()
            ->first();
    }
}
