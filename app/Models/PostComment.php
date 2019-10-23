<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the commentor that owns the post comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commentor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the post that owns the post comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
