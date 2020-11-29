<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 17.11.2020
 * Time: 23:33
 */

namespace App\Http\Controllers;


use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use function Psy\debug;


class HomeController extends Controller {

    public function index() {

        //$rubric = Rubric::query()->create(['title' => 'Rubric 5']);
        //$post = Post::query()->create(['title' => 'Post 5', 'content' => 'content 5', 'rubric_id' => 2]);

       /* $post = Post::find(2);
        dd($post->rubric->title);*/
       //$rubric = Rubric::find(1)->posts()->select('title')->where('id', '>', 2)->get();

        /*$posts = Post::with('rubric')->where('id', '>', 1)->get();

        foreach ($posts as $post) {
            dump($post->title, $post->rubric->title);
        }*/

    //Tag::query()->insert(['title' => 'Tag 4']);

        $post = Post::find(2);
        dump($post->title);

        foreach ($post->tags as $tag) {
            dump($tag->title);
        }


        //dump($posts);

    }

    public function test() {
        //return __METHOD__;
    }

}