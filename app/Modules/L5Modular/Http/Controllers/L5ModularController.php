<?php

namespace App\Modules\L5Modular\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Modules\L5Modular\Models\Contrat ;
class L5ModularController  extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
 
    public function welcome()

    {
     
        return view('L5Modular::welcome');
    }



}
