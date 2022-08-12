<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    
    // fonction qui nous permet de lister les produits
    public function index (){
        $factures = Facture::All();
        return view('pages.facture', [
            'factures'=>$factures
        ]);
    }

    // fonction qui nous permet d'appeler le formulaire d'ajout
    public function create(){
        $factures = Facture::All();
        return view('pages.ajoutFacture',[
            'factures'=>$factures
        ]);
    }

    // fonction qui nous permet de récupérer les données du formulaire 
    //et les insère dans la base de donnée
    public function store (Request $request){
        $request->validate([
                    'numero_facture'=> 'required',
        ]);
    
        $form_data = array(
            'numero_facture'=> $request->numero_facture,
        );
    
        Facture::create($form_data);
    
        return redirect()->Route('facture.index');
    } 
}
