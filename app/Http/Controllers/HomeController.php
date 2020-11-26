<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 17.11.2020
 * Time: 23:33
 */

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\DB;
use function Psy\debug;

class HomeController extends Controller {

    public function index() {

        $post = new Post();
        $post->title = 'Post 2';
        //$post->content = 'text 2';
        $post->save();

    }

    public function test() {
        //return __METHOD__;
    }

}