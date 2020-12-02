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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\debug;


class HomeController extends Controller {

    public function index() {

        $title = 'Home Page';
        $posts = Post::orderBy('id', 'desc')->get();

        return view('home', compact('title', 'posts'));

    }

    public function create() {
        $title = 'create';
        $rubrics = Rubric::pluck('title', 'id')->all();
        //dd($rubrics);
        return view('create', compact('title','rubrics'));

    }


    public function store(Request $request) {
        /*dump($request->input('title'));
        dump($request->input('content'));
        dump($request->input('rubric_id'));*/

        dump($request->all());

        Post::create($request->all());

        return redirect()->route('home');
    }

}