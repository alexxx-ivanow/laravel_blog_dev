<?php

namespace App;

use Carbon\Carbon;
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
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    /*public function getPostDate () {
        return Carbon::parse($this->created_at)->diffForHumans();
    }*/

    public function getPostDate () {
        $formatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        $formatter->setPattern('d MMM y');
        return $formatter->format(new \DateTime($this->created_at));
    }

}
