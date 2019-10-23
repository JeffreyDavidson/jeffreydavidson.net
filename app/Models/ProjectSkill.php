<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    /**
     * The projects that belong to the skill.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(ProjectSkill::class, 'project_skill', 'skill_id', 'project_id');
    }
}
