<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function contact_nous()
    {
        return view('contact_nous');
    }
}
