<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list() {

        $customers = Customer::all();

        return view('customers.customers', compact('customers'));

    }

}
