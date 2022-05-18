<?php

namespace App\Modules\L5Modular\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\L5Modular\Models\Employe ;
use  App\Modules\L5Modular\Models\Contrat ;
class EmployeController  extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employes=Employe::latest()->paginate(5);
  
        return view('L5Modular::employes.index',compact('employes')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        $contrats = Contrat::all();
        return view('L5Modular::employes.create',compact('contrats'));
    }




    public function store(Request $request)
    {
        
        $request->validate([
           
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'sexe' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'date_naissance' => 'required',
            'cin' => 'required',
            'cnss' => 'required',
            'type_contrat_id' => 'required',
            'statu_matrimoniel' => 'required',
            'enfants' => 'required',
        
        ]);
        $employes = Employe::create([
           
          
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'sexe' => $request->sexe,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'date_naissance' => $request->date_naissance,
            'cin' => $request->cin,
            'cnss' => $request->cnss,
            'type_contrat_id' => $request->type_contrat_id,
            'statu_matrimoniel' => $request->statu_matrimoniel,
            'enfants' => $request->enfants,
           
        
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
        
            $avatar->move(public_path('assets\images'), $filename) ;
           
            $employes->avatar = $filename;
            $employes->save();
        }
       	
   
        return redirect()->route('employes.index')
                        ->with('success','Employe créé avec succès.');
    }



    
    public function show(Employe $employe)
    {
        return view('L5Modular::employes.show',compact('employe'));
    }



    public function edit(Employe $employe)
    {
        $contrats = Contrat::all();
        
        return view('L5Modular::employes.edit',compact('employe' ,'contrats'));
    }

    public function update(Request $request, Employe $employe)
    {
     
  
        $employe->update($request->all());


      
  
        return redirect()->route('employes.index')
          ->with('success',' Employe Mis à jour avec succés');
    }

   
    public function destroy(Employe $employe)
    {
        $employe->delete();
  
        return redirect()->route('employes.index')
                        ->with('success',' Employe Supprimé avec succès');
    }

}
