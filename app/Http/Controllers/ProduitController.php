<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
     // fonction qui nous permet de lister les produits
    public function index (){
        $produits = Produit::All();
        return view('pages.produit', [
            'produits'=>$produits
        ]);
    }

     // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $produits = Produit::All();
        return view('pages.ajoutProduit',[
            'produits'=>$produits
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'libelle'=> 'required',
                    'description'=> 'required',
                    'quantite'=> 'required',
                    'prix_unitaire'=> 'required',
                    'date_entre'=> 'required',
                    'date_peremption'=> 'required',
        ]);
    
        $form_data = array(
            'libelle'=> $request->libelle,
            'description'=> $request->description,
            'quantite'=> $request->quantite,
            'prix_unitaire'=> $request->prix_unitaire,
            'date_entre'=> $request->date_entre,
            'date_peremption'=> $request->date_peremption,
        );
    
        Produit::create($form_data);
    
        return redirect()->Route('produit.index');
    }
    
}
