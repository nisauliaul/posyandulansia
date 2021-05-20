<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiLansiaController extends Controller
{
    //tampilan data homepage
    public function ilansia(){
        return view('lansia.infolansia');
    }
}
