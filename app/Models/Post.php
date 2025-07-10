<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['id', 'title','body'];

    public function tags() : BelongsToMany
    {
      /*  return $this->belongsToMany(Tag::class, 'post_tag',  'p_id','t_id')
            ->as('mytbl')
            ->withPivot(['prompt','created_at']);*/
        return $this->belongsToMany(Tag::class, 'post_tag',  'p_id','t_id')
            ->withPivot(['prompt','created_at']);
    }
}
