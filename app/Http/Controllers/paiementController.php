<?php

namespace App\Http\Controllers;
use App\Models\paiement;
use Illuminate\Http\Request;

class paiementController extends Controller
{
    function paiement(Request $paiement){
     paiement::create([
             'nom' =>$paiement->nom,
            'prenom' =>$paiement->prenom,
            'email' =>$paiement->email,
            'numero' =>$paiement->numero,
            'ville_de_depart' =>$paiement->ville_de_depart,
            'ville_arriver' =>$paiement->ville_arriver,
            'date' =>$paiement->date,
            'nombre_ticket' =>$paiement->nombre_ticket,
            'compagnie' =>$paiement->compagnie
     ]);
    //  dd($paiement->all());
     return redirect()->back()->with('paiement', 'Ticke acheter avec succès');
    }
    // function delete(paiement $paiement){
    //     $paiement->delete();
    //     return redirect()->back()->with('delete', 'Message supprimer avec succès');
    // }
}
