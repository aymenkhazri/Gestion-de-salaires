<?php

namespace App\Modules\L5Modular\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\L5Modular\Models\Contrat ;
class ContratController  extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats=Contrat::latest()->paginate(5);
  
        return view('L5Modular::contrats.index',compact('contrats')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('L5Modular::contrats.create');
    }




    public function store(Request $request)
    {
        
        $request->validate([
            'type_contrat' => 'required',
        
        ]);
        $user = Contrat::create([
            'type_contrat' => $request->type_contrat,
        
        ]);
       	
   
        return redirect()->route('contrats.index')
                        ->with('success','contrat créé avec succès.');
    }



    
    public function show(Contrat $contrat)
    {
        return view('L5Modular::contrats.show',compact('contrat'));
    }



    public function edit(Contrat $contrat)
    {
       
        
        return view('L5Modular::contrats.edit',compact('contrat'));
    }

    public function update(Request $request, Contrat $contrat)
    {
        $request->validate([
            'type_contrat' => 'required',
       
            
            
        ]);
  
        $contrat->update($request->all());
  
        return redirect()->route('contrats.index')
          ->with('success','type contrat Mis à jour avec succés');
    }

   
    public function destroy(Contrat $contrat)
    {
        $contrat->delete();
  
        return redirect()->route('contrats.index')
                        ->with('success','type contrat Supprimé avec succès');
    }

}
