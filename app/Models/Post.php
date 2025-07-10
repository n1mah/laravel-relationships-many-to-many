<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['id', 'title','body'];

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
