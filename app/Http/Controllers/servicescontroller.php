<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicescontroller extends Controller {
    public function servicedetails() {
        return view('pages.service-details');
    }


    public function service() {
        return view('pages.service');
    }
}
