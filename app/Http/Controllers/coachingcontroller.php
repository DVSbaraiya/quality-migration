<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coachingcontroller extends Controller {
    public function coaching() {
        return view('pages.coaching');
    }

    public function ptecoaching() {
        return view('pages.pte-coaching');
    }

    public function ieltscoaching() {
        return view('pages.ielts-coaching');
    }

    public function tofelcoaching() {
        return view('pages.tofel-coaching');
    }

    public function naaticoaching() {
        return view('pages.naati-coaching');
    }

    public function coachingdetails() {
        return view('pages.coaching-details');
    }
}
