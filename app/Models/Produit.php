<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produitVendus()
    {
        return $this->hasMany(ProduitVendu::class);
    }
    
    public function produitCommandes()
    {
        return $this->hasMany(ProduitCommande::class);
    }
}
