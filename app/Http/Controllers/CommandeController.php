<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    
    // fonction qui nous permet de lister les commandes
    public function index (){
        $commandes = Commande::All();
        return view('pages.commande', [
            'commandes'=>$commandes
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        return view('pages.ajoutCommande');
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'numero_commande'=> 'required',
                    'description'=> 'required',
                    'date_commande'=> 'required',
                    'date_livraison'=> 'required',
                    'fournisseur'=> 'required',

        ]);
    
        $form_data = array(
            'numero_commande'=> $request->numero_commande,
            'description'=> $request->description,
            'date_commande'=> $request->date_commande,
            'date_livraison'=> $request->date_livraison,
            'fournisseur'=> $request->fournisseur,
        );
    
        Commande::create($form_data);
    
        return redirect()->Route('commande.index');
    } 
}
