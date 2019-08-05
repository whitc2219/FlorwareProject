<?php

namespace App\Http\Controllers;
use App\Sale;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function __construct()
    {
        //    $this->middleware('auth');
    }

    public function list() {

        $sales = Sale::all();

        return view('sales.sales', compact('sales'));

    }
}
