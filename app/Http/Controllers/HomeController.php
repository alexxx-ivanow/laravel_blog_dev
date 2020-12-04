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
use \Illuminate\Support\Facades\Validator;


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

        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'required|integer'
        ]);

        /*$rules = [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer'
        ];

        $messages = [
            'title.required' => 'Заполните поле названия',
            'title.min' => 'Миниму 5 символов в названии',
            'content.required' => 'Поле контента не может быть пустым',
            'rubric_id.integer' => 'Выберите рубрику статьи'
        ];

        Validator::make($request->all(), $rules, $messages)->validate();*/

        Post::create($request->all());

        return redirect()->route('home');
    }

}