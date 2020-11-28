<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    /*protected $table = 'my_posts';
    protected $primaryKey = 'post_id';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $timestamp = false;
    public $timestamps = false;*/
    protected $fillable = ['title', 'content', 'rubric_id'];

    public function rubric () {
        return $this->belongsTo('App\Rubric');
    }

}
