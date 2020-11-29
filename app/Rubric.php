<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubric
 * @package App
 * @mixin Builder
 */
class Rubric extends Model
{
    protected $fillable = ['title'];

    public function posts () {
        return $this->hasMany(Post::class);
    }
}
