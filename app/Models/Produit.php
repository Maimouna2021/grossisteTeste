<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function client()
    {
        return $this->belongsToMany(Client::class, 'produit_vendu', 'Produit_id','Client_id');
    }
    
    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'produit_commande', 'Produit_id','Commande_id');
    }
}
