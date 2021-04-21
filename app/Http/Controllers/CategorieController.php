<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Categorie::latest()->paginate(5);
        return view('categories.index',compact('categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'nom_categorie' => 'required',
            'description_categorie' =>'required'
            

        ]);
        Categorie::create($request->all());

        return redirect()->route('categories.index')
        ->with('success', 'Categories created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    
    public function show(Categorie $categorie)
    {
        
        return view('categories.show',compact('categorie'));
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    // public function edit(Categorie $categorie)
    // {
        
    //     return view('categories.edit',compact('categorie'));
    // }

    public function edit($id)
    {
        $categorie = Categorie::find($id);

        
        return view('categories.edit')->with('categorie', $categorie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    // ---------------------------------------------------------------------------------
    // public function update(Request $request, Categorie $categorie)
    // {
        
    //     $request->validate([

    //         'nom_categorie' => 'required',
    //         'description_categorie' => 'required'

    //     ]);

    //     $categorie->update($request->all());

    //     return redirect()->route('categories.index')
    //     ->with('success','categorie updated successfully');
    // }
    // -------------------------------------------------------------------
    public function update( Request $request, $id)
    {
        $rules = array(
            'nom_categorie' => 'required',
            'description_categorie' => 'required'
        );
        $validatorData = Validator::make(Request::all(), $rules);

        if ($validatorData->fails()) {
            return redirect()->route('categories.index')->with('error','categorie not updated');
        } 
        else {
            $categorie = Categorie::find($id);
            $categorie->nom_categorie = Request::get('nom_categorie');
            $categorie->description_categorie = Request::get('description_categorie');
            $categorie->save();

            return redirect()->route('categories.index')->with('success','categorie updated successfully');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();

        return redirect()->route('categories.index')
        ->with('success','Categorie deleted successfuly');

        
    }
}
