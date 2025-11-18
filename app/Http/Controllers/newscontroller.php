<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newscontroller extends Controller {
    public function newsdetails() {
        return view('pages.news-details');
    }

    public function newsgrid() {
        return view('pages.news-grid');
    }

    public function news() {
        return view('pages.news');
    }
}
