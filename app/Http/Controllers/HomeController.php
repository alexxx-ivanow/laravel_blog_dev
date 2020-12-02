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

        $title = 'Home Page';
        $posts = Post::orderBy('id', 'desc')->get();

        return view('home', compact('title', 'posts'));

    }

    public function test() {
        //return __METHOD__;
    }

}