<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    function index(){
        return view('welcome');
      }
      function ajout(Request $request){
        contact::create([
          'email'=>$request->email,
          'message'=>$request->message,
        ]);
        return redirect()->back()->with('succes','Message envoyé avec succès');
      }

    //   function delete(contact $contact){
    //     $contact->delete();
    //     return redirect()->back()->with('delete', 'Message supprimer avec succès');
    // }
}
