<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produitCommandes()
    {
        return $this->hasMany(ProduitCommande::class);
    }
    public function fournisseur(){
        return $this->belongsTo(Fournisseur::class, 'fournisseur_id');
    }
}
