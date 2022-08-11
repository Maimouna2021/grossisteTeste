<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitVendu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function produit(){
        return $this->belongsTo(Produit::class, 'produit_id');
    }
    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }

}
  