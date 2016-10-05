<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title', 'body', 'banner', 'type'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
