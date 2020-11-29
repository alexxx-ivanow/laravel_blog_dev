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
});

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'Alexey ';
    //return view('home', ['res' => $res, 'name' => $name]);
    return view('home', compact('res','name'));
})->name('home');

Route::get('about', function () {
    return '<h1>About page</h1>';
});

Route::match(['post', 'get', 'put'], 'contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::get('post/{id}/{slug?}', function ($id, $slug = '') {
    return "Post $id"." Slag $slug";
})->name('post');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('posts', function () {
        return 'Posts list';
    });

    Route::get('post/create', function () {
        return "Post Create";
    });
    Route::get('post/{id}/edit', function ($id) {
        return "Post Edit id = {$id}";
    })->name('post');
});*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('page/about', 'PageController@show')->name('page.about');




