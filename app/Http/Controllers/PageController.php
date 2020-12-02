<?php

namespace App\Http\Controllers;


class PageController extends Controller {
    public function show() {
        $title = 'About Page';
        $h1 = 'H1 About';
        return view("pages.about", compact('title', 'h1'));
    }
}
