<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use App\Models\ProduitVendu;
use Illuminate\Http\Request;

class ProduitVenduController extends Controller
{
     // fonction qui nous permet de lister les produitVendus
     public function index (){
        $produitVendus = ProduitVendu::All();
        return view('pages.listeVente', [
            'produitVendus'=>$produitVendus
        ]);
    }

     // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $produitVendus = ProduitVendu::All();
        $produits= Produit::All();
        $clients= Client::All();
        return view('pages.vente',[
            'produitVendus'=>$produitVendus,
            'clients'=>$clients,
            'produits'=>$produits,
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'quantite'=> 'required',
                    'produit_id'=> 'required',
                    'client_id'=> 'required',
        ]);
    
        $form_data = array(
            'quantite'=> $request->quantite,
            'produit_id'=> $request->produit_id,
            'client_id'=> $request->client_id,
        );
    
        ProduitVendu::create($form_data);
    
        return redirect()->Route('produitVendu.index');
    }

}
