<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function commande()
    {
        return $this->hasMany(Commande::class);
    }
   
}
