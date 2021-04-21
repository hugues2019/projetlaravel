<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    
    public function dashboard()
    {
        // avant cetait commença return view('sb-admin/app'); / maintenant depuis que j'ai creer le dosier admin qui a dashbord dans son sein voila ce que ça donne 
        return view('admin/dashboard');
        // return view('admin/add-category-produits');
    }

    
    
}
