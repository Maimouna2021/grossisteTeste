<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function produit()
    {
        return $this->belongsToMany(Produit::class, 'produit_vendus', 'produit_id','client_id');
    }

}
