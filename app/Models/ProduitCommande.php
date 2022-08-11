<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitCommande extends Model
{
    use HasFactory;
    public function produit(){
        return $this->belongsTo(Produit::class, 'produit_id');
    }
    public function commande(){
        return $this->belongsTo(Commande::class, 'commande_id');
    }

}
