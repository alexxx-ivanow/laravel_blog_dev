<?php
/**
 * Created by PhpStorm.
 * User: Developer
 * Date: 17.11.2020
 * Time: 23:33
 */

namespace App\Http\Controllers;


class HomeController extends Controller {

    public function index() {
        dump($_ENV);
        dump(config('auth.guards.api.driver'));
        return view('home', ['res' => 5, 'name' => 'Alexey']);

    }

    public function test() {
        return __METHOD__;
    }

}