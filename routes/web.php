<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'Alexey ';
    //return view('home', ['res' => $res, 'name' => $name]);
    return view('home', compact('res','name'));
});

Route::get('about', function () {
    return '<h1>About page</h1>';
});

/*Route::get('contact', function () {
    return view('contact');
});

Route::post('send', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return 'Send Email';
});*/

/*Route::match(['post', 'get'], 'contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
});*/
Route::match(['post', 'get'], 'contact2', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::redirect('test', 'about', 301);