<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\compagnie_register;

class compagnie_regiterController extends Controller
{
    function index(){
        return view('compagnie');
    }
   function register(Request $request ){
    compagnie_register::create([
        'nom' =>$request->nom,
       'prenom' =>$request->prenom,
       'email' =>$request->email,
       'compagnie' =>$request->compagnie,
       'addresse' =>$request->addresse,
       'enregistrement' =>$request->enregistrement,
       'nana' =>$request->nana,
       'solo' =>$request->solo,
       'bien' =>$request->bien
]);

   }

}
