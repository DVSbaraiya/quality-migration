<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamcontroller extends Controller {
    public function teamdetails() {
        return view('pages.team-details');
    }

    public function team() {
        return view('pages.team');
    }
}
