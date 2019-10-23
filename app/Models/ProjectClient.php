<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectClient extends Model
{
    /**
     * Get the projects for the project client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(ProjectClient::class);
    }
}
