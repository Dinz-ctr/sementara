<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'title',
        'author',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}