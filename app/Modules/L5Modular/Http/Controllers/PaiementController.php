<?php

namespace App\Modules\L5Modular\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\L5Modular\Models\Employe ;
use  App\Modules\L5Modular\Models\Contrat ;
use  App\Modules\L5Modular\Models\Paiement ;
class PaiementController  extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employes=Employe::latest()->paginate(5);
  
        return view('L5Modular::paiements.index',compact('employes')) 
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }



   


    public function edit($id)
    {
      
        $employe=Employe::find($id);
        return view('L5Modular::paiements.edit',compact('employe'));
    }

    public function update(Request $request, $id)
    {
     
  
        $employe=Employe::find($id);


        

   $paiement = Paiement::create([
           
          
            'salaire_brut' => $request->salaire_brut,

            'retenue_cnss' => 9.180,

            'salaire_imposable' => $request->salaire_brut-9.18,

            'contribution_sociale' =>0.817 ,
            'retenue_la_source' => 0.000,
            'net_a_apayer' => $request->salaire_brut-9.18+0.817  ,
        
        ]);
      
        

       
        
        

        return view('L5Modular::paiements.show',compact('employe','paiement'));
      
         
    }

   
  

}
