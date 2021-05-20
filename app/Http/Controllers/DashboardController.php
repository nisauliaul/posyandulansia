<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //tampilan data
    public function index(){
        return view('index');
    }
}
