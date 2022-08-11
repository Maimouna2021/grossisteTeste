<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    // fonction qui nous permet de lister les produits
    public function index (){
        $fournisseurs = Fournisseur::All();
        return view('pages.fournisseur', [
            'fournisseurs'=>$fournisseurs
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $fournisseurs = Fournisseur::All();
        return view('pages.ajoutFournisseur',[
            'fournisseurs'=>$fournisseurs
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'nom'=> 'required',
                    'prenom'=> 'required',
                    'tel'=> 'required',
                    'adresse'=> 'required',
        ]);
    
        $form_data = array(
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'tel'=> $request->tel,
            'adresse'=> $request->adresse,
        );
    
        Fournisseur::create($form_data);
    
        return redirect()->Route('fournisseur.index');
    } 
}
