<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategorieController extends Controller
{

    public function index()
    {
        $categories = Categorie::latest()->paginate(5);
        return view('categories.index',compact('categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nom_categorie' => 'required',
            'description_categorie' =>'required'
        ]);
        Categorie::create($request->all());

        return redirect()->route('categories.index')
        ->with('success', 'Categories created successfully.');
    }

    
    public function show($id)
    {   
        $categorie = Categorie::find($id);
        return view('categories.show')->with('categorie', $categorie);
    }
 

    public function edit($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit')->with('categorie', $categorie);
    }

    public function update( Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
 
        return redirect()->route('categories.index')->with('success','categorie updated successfully');
    }


    public function destroy($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();

        return redirect()->route('categories.index')->with('success','Categorie deleted successfuly');
    }
}
