<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = ['id', 'title'];

     public function posts() : BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_tag',  't_id','p_id');
    }
}
