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

    public function index(Request $request) {

        /*$request->session()->put('test', 'value_test');
        session(['cart' => [
                ['id' => 1,
                'title' => 'Good 1'],
                ['id' => 2,
                'title' => 'Good 2']
            ]
        ]);*/
        //$request->session()->remove('test');
        //$request->session()->flush();

        //$request->session()->push('cart', ['id' => 3, 'title' => 'Good 3']);

        //dump($request->session()->pull('test'));

        //dump(session('cart.0.title'));
        //dump($request->session()->get('cart.0.title'));

        dump(session()->all());

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

        Post::create($request->all());

        $request->session()->flash('success', 'Данные успешно сохранены');

        return redirect()->route('home');
    }

}