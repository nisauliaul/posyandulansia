<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //tampilan data homepage
    public function homepage(){
        return view('halamanutama.homepage');
    }

    // //tampilan data kms
    // public function kms(){
    //     return view('halamanutama.kms');
    // }

    // //tampilan data profile
    // public function profile(){
    //     return view('halamanutama.profile');
    // }
}
