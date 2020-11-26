<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*protected $table = 'my_posts';
    protected $primaryKey = 'post_id';
    protected $incrementing = false;
    protected $keyType = 'string';
    protected $timestamp = false;
    public $timestamps = false;*/
    protected $attributes = [
        'content' => 'Lorem Ipsum 2'
    ];

}
