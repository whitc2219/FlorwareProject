<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingSiteController extends Controller
{

    public function __construct()
    {
    }



    public function index() {

        return view('landingsite');

    }


}
