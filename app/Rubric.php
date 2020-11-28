<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    protected $fillable = ['title'];

    public function posts () {
        return $this->hasMany(Post::class);
    }
}
