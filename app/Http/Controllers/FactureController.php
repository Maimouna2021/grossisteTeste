<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\PDF;



class FactureController extends Controller
{
    
    // fonction qui nous permet de lister les produits
    public function index (){
        $factures = Facture::paginate(1);
        return view('pages.facture', [
            'factures'=>$factures
        ]);

        $facture = $this->get_facture();
        return view('facturePDF')->with('facture',
        $facture);
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
    
    function get_facture()
    {
        $facture = DB::table('facture')
                          ->limit(10)
                          ->get();
        return $facture;                  

    }
    public function get_RecupFacture($id)
    {
        $commandes = Commande::All();
        foreach($commandes as $commande){
        
            $form_data = Commande::where($commande->id, '=', count($commandes) + 1);
            return view('facture.index', compact($form_data));
        }
    }
}
