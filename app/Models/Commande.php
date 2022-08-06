<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'produit_commande', 'Produit_id','Commande_id');
    }

}
