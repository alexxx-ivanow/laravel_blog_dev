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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use function Psy\debug;


class HomeController extends Controller {

    public function index() {

        /*$post = new Post();
        $post->title = 'Post 2';
        $post->save();*/
        //$data = Country::all();
        //$data = Country::query()->limit(5)->get();
        //$data = Country::where('Code', '<', 'ALB')->limit(2)->offset(1)->select('Code', 'Name')->get();
        //$data = City::find('5');
        /*$data = Country::find('AGO');
        dd($data);*/

        /*$post = new Post();
        $post->title = 'Post 4';
        $post->content = 'content 4';
        $post->save();*/

        //Post::create(['title' => 'Post 6', 'content' => 'content 6']);
        //$post = new Post();
        //$post->fill(['title' => 'title 8', 'content' => 'content 8']);


        //Post::where('id', '>', 3)->update(['updated_at' => NOW()]);
        /*$post = Post::find(7);
        if(is_object($post)) {
            $post->delete();
        }*/
        Post::create(['title' => 'title 3', 'content' => 'content 3']);


        //$post->save();

    }

    public function test() {
        //return __METHOD__;
    }

}