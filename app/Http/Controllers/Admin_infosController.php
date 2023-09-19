<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_info;
class Admin_infosController extends Controller
{
    function ajout(Request $request){
        Admin_info::create([
            'titre'=>$request->titre,
            'contenu'=>$request->contenu,
        ]);
        return redirect()->back()->with('succes', 'Information envoyé avec succès à tout les membres');
    }
}
